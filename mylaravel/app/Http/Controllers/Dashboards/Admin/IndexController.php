<?php

namespace App\Http\Controllers\Dashboards\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

     public const HOME = 'admin.dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function admin()
   {
    return view('dashboard.admin.index');
   }

}