@extends('layouts.master')

@section('title', 'User Page')
    
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data User</h1>
            <p>Data dari Database</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->profile->Gender }}</td>
                                    <td>{{ $user->profile->age }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ Route('user-show', $user ->id) }}">Detail</a>
                                        <a class="btn btn-secondary" href="{{ Route('user-edit', $user ->id) }}">Edit</a>
                                        {{-- <form action="{{ Route('delete', $user ->id) }}" method="post" class="d-inline" >
                                            @csrf
                                            @method('DELETE')   
                                        </form> --}}
                                        <a href="{{ Route('delete', $user ->id) }}" class="btn btn-danger d-inline" data-confirm-delete="true">Delete</a>
                                        
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

<!-- Script -->
@endsection