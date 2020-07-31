<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\updateUserRequest;
use App\Contact;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array('user' => User::find($id));
        return view('users.profile', $data);
    }

    // Edit user profile
    public function edit($id)
    {
       $user = User::find($id);
       $data = array('user' => $user);
        return view('users.updateProfile', $data);
    }


    // Update user profile
    public function update(updateUserRequest $request, $id)
    {  
      $user = User::find($id);
      $user->name = Input::get('name');
      $user->email = Input::get('email');
      if(Input::get('password')){
        $user->password = bcrypt(Input::get('password'));
      }
      $user->save();
      return redirect ('user/'.$id)->with('success', 'Your profile was successfully updated!');
    }
}
