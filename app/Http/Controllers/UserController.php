<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::search($search)->with('orders.items')->get();

        return view('user.index',compact('users'));

    }
}
