<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read(){

        $mhs = mahasiswa::all();
        return response()->json([
            'sucess'=> true,
            'message' => 'data berhasil ditemukan',
            'data' => $mhs
        ], 200);
    }

    public function create(Request $request)
    {
        $mhs = mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat

        ]);

        if ($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil ditambahkan'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data gagal ditambahkan'
            ],400);
        }
    }

    public function update($id,  Request $request)
{
    $mhs = mahasiswa::find($id)->update([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'gender' => $request->gender,
        'prodi' => $request->prodi,
        'minat' => $request->minat
    ]);

    if ($mhs)
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil di Ubah'
        ],200);
    }
    else 
    {
        return response()->json([
            'success'=>false,
            'message'=>'Data Berhasil Diubah'
        ], 200);    }

}
public function delete($id){
    $mhs = mahasiswa::find($id)->delete;

    if ($mhs){
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil di hapus'
        ],200);
    }else{
        return response()->json([
            'success' => false,
            'message' => 'Data gagal di hapus'
        ],400);
    }
}
}
// http://127.0.0.1:8000/api/mahasiswa/read