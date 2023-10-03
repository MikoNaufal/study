@extends('layouts.master')

@section  ('title', 'Show user')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Detail User</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>
                        <td>{{ $user->profile->Gender }}</td>
                        <p>{{ $user->profile->age }}</p>
                        <br>
                        <a href="{{ route('user') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection



