@extends('layouts.master')

@section  ('title', 'Halaman Create')

@section('section')
<div class="container-fluid">

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $item)
              <li>{{ $item }}</li>
          @endforeach
        </ul>    
    </div>
</div>
@endif
<form action="" method='post'>
@csrf
    <div class="card-body">
        <div class="mb-3">
            <label for="nama" form-label>Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
          </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    {{-- <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>