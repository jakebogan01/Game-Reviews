<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function update(Request $request){

        //validate form
        $this->validate($request,[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
        ]);

        //update user
        $user = auth()->user();
        $user->update([
            'name' => request()->name,
            'username' => request()->username,
            'email' => request()->email,
        ]);

        return redirect()->route('admin')->with('status','User Update Successful!');
    }
}