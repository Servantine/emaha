<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use App\User;

class PageController extends Controller
{
    public function home(){
        return view('home', ['key' => 'Home']);
    }
    public function profile(){
        return view('profile', ['key' => 'Profile']);
    }
    public function mahasiswa(){
        $mhs = mahasiswa::paginate(10);
        // return dd($mhs);
        return view('mahasiswa',  ['key' => 'Mahasiswa', 'mhs' => $mhs]);
    }

    public function search(Request $request){
        $cari = $request->q;
        $mhs = preg_match('/\d/', $cari) ? mahasiswa::where('nim', 'like', '%' .$cari. '%')->paginate(10) : mahasiswa::where('nama', 'like', '%' .$cari. '%')->paginate(10);
        $mhs->appends($request -> all());
       return view('mahasiswa', ['key' => 'mahasiswa', 'mhs' => $mhs]); 
    }
    public function contact(){
        return view('contact', ['key' => 'Contact']);
    }

    public function tambah(){
        return view('formadd' , ['key' => 'Mahasiswa']);
    }

    public function save(Request $request){
        $minat = implode(',',$request->get('minat'));
        mahasiswa::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'prodi' => $request -> prodi,
            'minat' => $minat
        ]);
        return redirect('mahasiswa')->with('flash','Data telah Tersimpan');
    }

    public function formedit($id){
        $mhs = Mahasiswa::find($id);

        return view('formedit', ['key' => 'Mahasiswa' ,'mhs' => $mhs]);
    }

    public function update($id, Request $request){
        $minat = implode(',',$request->get('minat'));
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();

        return redirect('mahasiswa')->with('flash', 'Data Berhasil di Ubah');
    }

    public function delete($id){
        $mhs = mahasiswa::find($id);
        $mhs->delete();

        return redirect('student')->with('flash', 'Data Berhasil di Hapus');

    }

    public function user(){
        $user = User::paginate(5);
        return view('user', ['key' => 'User' ,'user' => $user]);
    }

    public function tambahuser(){
        return view('formadduser' , ['key' => 'User']);
    }
}
