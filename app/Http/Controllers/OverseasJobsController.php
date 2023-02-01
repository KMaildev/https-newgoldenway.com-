<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\OverseasJobs;
use Illuminate\Http\Request;

class OverseasJobsController extends Controller
{
    public function show($id)
    {
        $country = Country::findOrFail($id);
        $jobs = OverseasJobs::get()->where('countrie_id', $id);
        return view('overseas_job.show', compact('country', 'jobs'));
    }
}
