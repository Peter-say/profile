<?php

namespace App\Http\Controllers\Dashboards\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public const HOME = 'admin/dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        $posts = Post::get();
        $users = User::latest()->get();
        return view('dashboard.admin.index', [
            'users' => $users,
            'posts' => $posts,
        ]);
    }

    public function users()
    {
        return view('dashboard.admin.users.index');
    }

       public function search(Request $request)
       {
         $search = $_GET['query'];
         $users = User::where('name', 'email' , '%'.$search.'%')->get();
         return view('dashboard.admin.users.index', [
               "users" => $users,
           ]);
       }  




}
