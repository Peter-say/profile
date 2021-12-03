<?php

namespace App\Http\Controllers\Dashboards\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
     return view('dashboard.users.index');
    }
 
}
