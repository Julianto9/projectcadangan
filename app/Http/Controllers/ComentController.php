<?php

namespace App\Http\Controllers;
use Ramsey\Uuid\Uuid;
use App\Models\Coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Coment::get();
        return view('dashboard.coment.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validatedData = $request->validate([
            'name' => 'string|required|max:255',
            'komentar' => 'string|required|max:5000',
        ]);
        Coment::create($validatedData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $datas = Coment::where('id',$id)->get();
         return view('dashboard.coment.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Coment::get()->where('id', $id)->firstOrFail();
        $validatedData = $request->validate([
            'name' => 'string|required|max:255',
            'komentar' => 'string|required|max:5000',
        ]);
        $log = [
            'uuid' => Uuid::uuid4()->getHex(),
            'user_id' => Auth::user()->id,
            'description' => '<em>Mengubah </em> Data Komentar <strong>[' . $data->name . ']</strong>', //name = nama tag di view (file index)
            'category' => 'edit',
            'created_at' => now(),
        ];

        DB::table('logs')->insert($log);
        Coment::where('id',$id)->first()->update($validatedData);
        return redirect('/coment')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Coment::get()->where('id', $id)->firstOrFail();
        $data->deleted_by = Auth::user()->id;
        $data->save();
        $log = [
            'uuid' => Uuid::uuid4()->getHex(),
            'user_id' => Auth::user()->id,
            'description' => '<em>Menghapus</em> data Komentar <strong>[' . $data->name . ']</strong>', //name = nama tag di view (file index)
            'category' => 'hapus',
            'created_at' => now(),
        ];

        DB::table('logs')->insert($log);
        $data->delete();
        //kalau redirect()->route itu manggilnya harus di pakai name di route, kalau langsung bisa aja
        return redirect('coment')->with('success', 'Data berhasil dihapus!');
    }
    }

