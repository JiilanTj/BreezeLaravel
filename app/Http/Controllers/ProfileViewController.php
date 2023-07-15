<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileViewController extends Controller
{
    public function proview()
    {
        return view('profileview');
    }
}
