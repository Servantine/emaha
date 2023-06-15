@extends('layouts.main')
@section('title' ,'User Add')
@section('konten')
          <div class="card mt-4">
               <form action="/userr/simpanuserr" method="POST" class="pt-2 pb-2 pl-2">
               @csrf
               <div class="form-group w-25">
                    <label>NIK</label>
                    <input type="text" name= "nik" class="form-control" placeholder="Masukkan NIK ">
               </div>
               <div class="form-group w-25">
                    <label>Nama</label>
                    <input type="text" name= "nama" class="form-control" placeholder="Masukkan Nama ">
               </div>
               <div class="form-group w-25">
                    <label>Nomer HP</label>
                    <input type="text" name= "nomerhp" class="form-control" placeholder="Masukkan Nomer HP ">
               </div>
               <div class="form-group w-25">
                    <label>Password</label>
                    <input type="password" name= "password" class="form-control" placeholder="Masukkan Password ">
               </div>
               <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">

               </div>
               </form>
          </div>
@endsection