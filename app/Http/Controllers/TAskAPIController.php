<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
class TAskAPIController extends Controller
{
    public function create(Request $request)
    {
        $artikel = Artikel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,

        ]);

        if ($artikel)
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
        $artikel = Artikel::find($id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($artikel)
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
        $artikel = Artikel::find($id)->delete;

        if ($artikel){
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
