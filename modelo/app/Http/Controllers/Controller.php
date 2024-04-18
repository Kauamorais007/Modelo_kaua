<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
class UserController extends Controller
{
    public function show(string $id): View
    {
        return view('user.profile');
    }
}