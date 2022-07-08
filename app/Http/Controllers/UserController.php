<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::get();

    return view('users.index', [
      'users' => $users,
    ]);
  }


  public function show($id)
  {
    if(!$user = User::find($id))
    return redirect(route('user.index'));

    //return view('users.show', compact('user'));
    return view('users.show', [
      'user'=>$user,
    ]);
    
  }






  public function phpinfo()
  {
    phpinfo();
  }
}
