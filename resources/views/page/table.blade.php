@extends('layouts.master')

@section('title','Halaman Tabel')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('table-store') }}">
      @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
              </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Age</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Gender</label>
          {{-- <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age"> --}}
          <Select name="gender" class="form-select" aria-label="Default select example">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </Select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection
