<?php

namespace SendEmail\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('send::send');
    }
}
