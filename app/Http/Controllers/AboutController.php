<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('front.about.index' , compact('users'));
    }
}
