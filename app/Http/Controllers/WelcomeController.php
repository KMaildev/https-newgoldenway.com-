<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
        return view('welcome', compact('activities'));
    }
}
