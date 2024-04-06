<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Alternative::all();
        return view('home', compact('data'));
    }
}
