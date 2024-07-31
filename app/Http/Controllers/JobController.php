<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = Job::latest()
            ->get()
            ->groupBy('featured');

        $jobs = $job[0] ?? "";
        $featured = $job[1] ?? "";
        if($job->isNotEmpty()) {
            return view('jobs.index', [
                'jobs' => $jobs,
                'featured_jobs' => $featured,
                'tags' => Tag::all()
            ]);
        }
        else{
            return view('jobs.index');
        }
    }

    /**
     * Show the forms for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');
        $job = \Auth::user()->employer->jobs()->create(\Arr::except($attributes, 'tags'));

        if($attributes['tags'] ?? false){
            foreach (explode(',', $attributes['tags']) as $tag){
                $job->tag($tag);
            }
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the forms for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
