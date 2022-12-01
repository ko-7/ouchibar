<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 各モデルを有効にする
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }
}
