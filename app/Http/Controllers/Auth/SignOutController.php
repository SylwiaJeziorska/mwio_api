<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function __invoke(Request $request)
    {
      auth()->logout();
        dd(auth()->logout());
    }
}
