<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function show(){
        return view('mainadmin.mainadmin');
    }
    public function createForm(){
        return view('mainadmin.createusers');
    }
    public function Store(Request $request){

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password=Hash::make($request->password);
        $data->save();
        if ($data) {
            return redirect('/view')->with('success', 'Success! User created');
        }
        else {
            return back()->with('failed', 'Failed! User not created');
        };

    }
    public function viewUser(){
        $users = User::all();
        return view('mainadmin.table', compact('users'));
    }
    public function delete($id){
        User::where('id', $id)->delete();
        // or you can use User::destroy($id);
        if ($id) {
            return redirect()->back()->with('success', 'User Deleted');
        }
    }
    public function userEdit($id){
        $user = User::find($id);
        return view('mainadmin.edit',compact('user'));
    }
    public function userUpdate(Request  $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password']=Hash::make($request->password);
        DB::table('users')->where('id',$request->id)->update($data);

            return redirect('/view')->with('success', 'Data is Updated');

    }

}

