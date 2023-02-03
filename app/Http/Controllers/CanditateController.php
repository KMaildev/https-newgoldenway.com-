<?php

namespace App\Http\Controllers;

use App\Models\Canditate;
use Illuminate\Http\Request;

class CanditateController extends Controller
{
    public function index()
    {
        $canditates = Canditate::all();
        return view('canditate.index', compact('canditates'));
    }

    public function canditateAjax($id)
    {
        $worker = Canditate::findOrFail($id);
        return json_encode($worker);
    }

    public function show($id)
    {
        $worker = Canditate::findOrFail($id);
        return view('canditate.show', compact('worker'));
    }
}
