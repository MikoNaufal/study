<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.table');    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=>'required',
        ]);

        $user = User::create($validated);
        $user->profile()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'password'=>$request->password,
        ]);
        Alert::success('Success Title', 'Success Message');
        return redirect()->route('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       return view ('page.user-show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $data = User::where($id)->first();
        return view('page.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user,Request $request)
    {
        // $validated = $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'password'=>'required',
        // ]);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        $user->profile()->update([
            'age'=>$request->age,
            'gender'=>$request->gender,
        ]);
        Alert::success('Success Title', 'Success Message');
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->to('user');
    }
}
