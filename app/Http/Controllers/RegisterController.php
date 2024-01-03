<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Sign-Up | Self Service Pos'
        ]);
    }

    public function store(RegisterFormRequest $request)
    {
        $validatedData = $request->all();
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        return redirect('/')->with('success', 'Register Berhasil Silahkan Login');
    }
}
