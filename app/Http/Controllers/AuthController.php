<?php

namespace App\Http\Controllers;

use App\User;
use App\Userr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{    public function user(){
        $user = User::paginate(5);
        return view('user', ['key' => 'User' ,'user' => $user]);
    }

    public function tambahuser(){
        return view('formadduser' , ['key' => 'User']);
    }

    public function simpanuser(Request $request){
        $user = User::create([
            'name' => $request -> nama,
            'email' => $request -> email,
            'password' => bcrypt($request -> password),
        ]);

        return redirect('/user')->with('flash','Data telah Tersimpan');
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $name = Auth::user()->name ?? '';
            return redirect('/')->with('flash2','Servantin berhasil login');
        }
        else
        {
            return redirect('/login');
        }
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function tambahuserr(){
        return view('userr' , ['key' => 'User']);
    }

    public function simpanuserr(Request $request){
        $user = Userr::create([
            'nik' => $request -> nik_user,
            'nama' => $request -> nama_user,
            'nomerhp' => $request -> np_hp,
            'password' => bcrypt($request -> password),
        ]);

        return redirect('/user')->with('flash','Data telah Tersimpan');
    }
}

