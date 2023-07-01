<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DepositController extends Controller
{
    /**
     * Display the deposit page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('deposit');
    }
}
