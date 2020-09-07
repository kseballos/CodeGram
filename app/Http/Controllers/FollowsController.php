<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class FollowsController extends Controller
{

    Public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
      return auth()->user()->following()->toggle($user->profile);
    }
}
