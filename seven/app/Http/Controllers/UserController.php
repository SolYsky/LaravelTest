<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
 

class UserController extends Controller
{
    public function index()
    {
        //DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['sarthak', 'sarthak@bitfumes.com', 'password']);
        //$user = DB::select('select * from users');
        $user = new User();
        dd($user);
        return $user;
    }
}
