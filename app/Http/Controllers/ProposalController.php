<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function upload()
    {
        return view('dashboard.upload-proposal');
    }
}
