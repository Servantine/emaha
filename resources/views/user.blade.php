@extends('layouts.main')
@section('title', 'eMaha - User')
@section('konten')
   <div class="card mt-4"> 
<div class="card-header">
        <a href="/user/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square"></i> Tambah Users</a>  
        <form action="/mahasiswa/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form> 
    </div>
    <div class="card-body">

      @if(session('flash'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{  session('flash') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      @endif
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $no => $u)
                    <tr>
                        <th scope="row">{{ $user->firstitem() + $no }}</th>
                        <td>{{ $u -> name }}</td>
                        <td>{{ $u -> email }}</td>

                        <td>
                          <a href="/user/formedit/{{ $u->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                          <a href="/user/delete/{{ $u->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
          </table> 
          <span class="float-right">{{ $user -> links(   ) }}</span>
    </div>

   </div>
    
@endsection