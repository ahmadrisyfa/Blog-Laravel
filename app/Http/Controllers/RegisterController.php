<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'name'=> 'required|max:255',
           'username'=>['required','min:3','max:255', 'unique:users'],
           'email' => 'required|unique:users|email:dns',
           'password'=>'required|min:5|max:255'
       ]) ;

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);
    //    $request->session()->flash('success','registrasi berhasil! silahkan Login');

        return redirect('/login')->with('berhasil_registrasi','registrasi berhasil! silahkan Login');
    }
}
