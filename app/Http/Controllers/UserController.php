<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;



class UserController extends Controller
{
    function index() {
        // $users = User::all()->transform(function ($users){
        //     return[
        //         'name'=> $users->name,
        //         'email'=> $users->email,
        //         'Gender'=> $users->profile ? $users->profile->Gender : '',
        //         'age'=> $users->profile ? $users->profile->age : ''
        //     ];
        // });

        $users = user::paginate(5);
        confirmDelete('Delete User!',"Apakah anda ingin menghapus data ini??");
        return view('page.user')->with('users',$users);
    }

}
