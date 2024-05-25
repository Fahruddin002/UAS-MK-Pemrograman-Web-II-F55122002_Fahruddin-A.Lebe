<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
// use App\Http\Controllers\Auth;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request){
        session::flash('email',$request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Passoword wajib diisi',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            return redirect('penduduk')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan passowrd yang dimasukkan tidak valid');
        }
    }



    /**
     * @return RedirectResponse
     */

    function logout() //:RedirectResponse
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }



    function register()
    {
        return view('sesi/register');
    }
    function create(Request $request)
    {
        session::flash('name',$request->name);
        session::flash('email',$request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan Email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, Silahkan masukkan Email yang lain',
            'password.required' => 'Passoword wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            return redirect('/sesi')->with('success', 'Berhasil Register');
        } else {
            return redirect('/sesi/register')->with('error', 'Username dan passowrd yang dimasukkan tidak valid');
        }
    }
}
