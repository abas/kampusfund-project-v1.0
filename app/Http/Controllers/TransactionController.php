<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function transaction()
    {
        return view('dashboard.transaction');
    }
}
