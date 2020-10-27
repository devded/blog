<?php

namespace App\Http\Controllers;
use App\UdemyUser;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function adduser(){
        return view('adduser');
    }

    public function store(Request $request){
        UdemyUser::create($request->all());
        return redirect('/viewuser');
    }

    public function viewuser(){
        $users = UdemyUser::all();
        return view('viewuser', ['users' => $users]);
        //return view('viewuser');
    }

    public function deleteuser($id){
        $user = UdemyUser::find($id);
        $user -> delete();
        return back();
    }
    public function edituser($id){
        $user = UdemyUser::find($id);
        return view('edituser', ['user' => $user]);
    }

    public function update(Request $request, $id){
        $user = UdemyUser::find($id);
        $user -> update($request->all());
        return redirect('/viewuser');
    }


}
