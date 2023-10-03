 @extends('layouts.master')

@section('title','Halaman Tabel')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('user-update',$user) }}">
      @csrf
      @method("PATCH")
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $user->name }}">
              </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Age</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age" value="{{ $user->profile->age }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Gender</label>
          {{-- <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age"> --}}
          <Select name="gender" class="form-select" aria-label="Default select example">
            <option value="L" {{ $user->profile->gender === 'L' ? 'selected' : ''}}>Laki-laki</option>
            <option value="P" {{ $user->profile->gender === 'P' ? 'selected' : ''}}>Perempuan</option>
          </Select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection
