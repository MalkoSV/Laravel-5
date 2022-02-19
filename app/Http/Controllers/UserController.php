<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function sendForm(UserRequest $request)
    {
        //        $file = $request->file('image')->store('images', 'public');
        //        Storage::disk('public')->put('test3.txt', 'It is record to file 3', 'private');
        //        dump(Storage::disk('public')->url('text-put.txt'));
        //        User::create($request->all());

        /*****************************************************
         * $this->validate($request, [
         * 'name'     => 'required',
         * 'email'    => 'required',
         * 'password' => 'required',
         * ]);
         *******************************************************/

        User::create($request->all());
        return redirect('/');
    }

}
