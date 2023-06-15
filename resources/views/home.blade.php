@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('konten')

@if(session('flash2'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{  session('flash2') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
<div class="card mt-4"> 
    <div class="card-header"> kkk </div>
    <div class="card-body">
    </div>
</div>
@endsection