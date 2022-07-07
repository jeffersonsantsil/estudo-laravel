<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       return view('Users.index');
    }

    public function show($id)
    {
       dd('Users.index', $id);
    }
}
 