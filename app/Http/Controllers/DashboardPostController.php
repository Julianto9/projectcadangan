<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use App\Models\Coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Post::get();
        return view('dashboard.post.index', compact('datas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'judul_kontent' => 'string|required|max:255',
            'isi_kontent' => 'string|required|max:5000',
            'gambar' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|file|max:50024',
        ]);
        // $validatedData['created_by'] = Auth::user()->id;
        // $imageName = time().'.'.$request->gambar->extension();

        // Public Folder
        $validatedData['uuid'] = Uuid::uuid4()->getHex();
        $validatedData['created_by'] = Auth::user()->id;
          $log = [
            'uuid' => Uuid::uuid4()->getHex(),
            'user_id' => Auth::user()->id,
            'description' => '<em>Menambah</em> data Postingan <strong>[' . $request->name . ']</strong>', //name = nama tag di view (file index)
            'category' => 'Tambah',
            'created_at' => now(),
        ];

        DB::table('logs')->insert($log);
        
        $validatedData['gambar'] = $request->file('gambar')->store('information');
        Post::create($validatedData);
        return redirect('/dashboard')->with('success', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    {
        //
        $datas = User::get();
        $post = Post::where('id',$id)->get();
      
        return view('dashboard.post.show', compact('datas','post'));
    }

    public function showblog(string $id){
        $datas = User::get();
        $post = Post::where('id',$id)->get();
        $coment = Coment::get();
        $total = $coment->count();
        return view('layouts.blog', compact('datas','post','coment','total'));
    }
    
    public function showDashboard(){
        $post = Post::get()->count();
        $coment = Coment::get()->count();
        return view('dashboard.index', compact('post','coment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $datas = Post::where('id',$id)->get();
         return view('dashboard.post.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         //
         $validatedData = $request->validate([
            'judul_kontent' => 'string|required|max:255',
            'isi_kontent' => 'string|required|max:5000',
            'gambar' => 'image|file|max:50024',
        ]);
        // $validatedData['created_by'] = Auth::user()->id;
   
        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('information');
        }
        Post::where('id',$id)->first()->update($validatedData);
        return redirect('/dashboard')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Post::get()->where('id', $id)->firstOrFail();
        $data->deleted_by = Auth::user()->id;
        $data->save();
        $log = [
            'uuid' => Uuid::uuid4()->getHex(),
            'user_id' => Auth::user()->id,
            'description' => '<em>Menghapus</em> data Postingan <strong>[' . $data->name . ']</strong>', //name = nama tag di view (file index)
            'category' => 'hapus',
            'created_at' => now(),
        ];

        DB::table('logs')->insert($log);
        $data->delete();
        //kalau redirect()->route itu manggilnya harus di pakai name di route, kalau langsung bisa aja
        return redirect('dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
