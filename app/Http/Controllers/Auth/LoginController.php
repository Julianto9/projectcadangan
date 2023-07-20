<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;

use Ramsey\Uuid\Uuid;

//pastikan aktifkan ini utk cek auth loginya
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.index');
    }
    public function authenticate(Request $request)
    {
        // dd(User::get()->where('username', $request->username)->firstOrFail());
        $credentials = $request->validate([
            'username'=> 'required',
            'password' => 'required',
        ]);
        $remember_me = $request->has('remember_token') ? true : false; 
        if (Auth::attempt($credentials,$remember_me)) {

            $request->session()->regenerate();

            $data = User::get()->where('username', $request->username)->firstOrFail();
           
            $log = [
                'uuid' => Uuid::uuid4()->getHex(),
                'user_id' => Auth::user()->id,
                'description' => '<em>Login</em> akun <strong>[' . $data->name . ']</strong>',
                'category' => 'login',
                'created_at' => now(),
            ];

            DB::table('logs')->insert($log);

            return redirect()->intended('/dashboard');
        }


        return back()->with('loginError', 'Username atau Password salah');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function logout(Request $request)
    {
        $data = User::get()->where('uuid',)->firstOrFail();
        $log = [
            'uuid' => Uuid::uuid4()->getHex(),
            'user_id' => Auth::user()->id,
            'description' => '<em>Log out</em> akun <strong>[' . $data->name . ']</strong>',
            'description' => '<em>Log out</em> akun',
            'category' => 'logout',
            'created_at' => now(),
        ];

        DB::table('logs')->insert($log);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
