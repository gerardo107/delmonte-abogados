<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Index()
    {
        $users = User::all();

        return view('auth.usuarios')->with('usuarios', $users);
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->action('UserController@index');
    }

    public function edit($id)
    {
    	$user = User::find($id);

    	return view('auth.edit', compact('user', $user));
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();

    	return redirect()->action('UserController@index');
    }
}
