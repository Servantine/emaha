@extends('layouts.main')
@section('title' ,'User Add')
@section('konten')
          <div class="card mt-4">
               <form action="/user/simpanuser" method="POST" class="pt-2 pb-2 pl-2">
               @csrf
               <div class="form-group w-25">
                    <label>Name</label>
                    <input type="text" name= "nama" class="form-control" placeholder="Masukkan Name ">
               </div>
               <div class="form-group w-25">
                    <label>Email</label>
                    <input type="email" name= "email" class="form-control" placeholder="Masukkan Email ">
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