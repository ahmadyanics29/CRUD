<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function user()
    {
        $user = User::orderBy('id', 'DESC')->get();
  
        return view('dashboard', compact('user'));
    }
}
