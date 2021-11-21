<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {

        return view('welcome');
    }

    public function singlePost()
    {
return view('web.single_post');
    }
}
