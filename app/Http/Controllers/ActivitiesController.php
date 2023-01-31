<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
        return view('activities.index', compact('activities'));
    }

    public function show($id)
    {
        $activities = Activities::all();
        $activity = Activities::findOrFail($id);
        return view('activities.show', compact('activities', 'activity'));
    }
}
