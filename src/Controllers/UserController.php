<?php

namespace SendEmail\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SendEmail\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('send::send');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect(route('home'));
    }
}
