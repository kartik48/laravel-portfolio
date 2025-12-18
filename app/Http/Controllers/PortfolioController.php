<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fluent;

class PortfolioController extends Controller
{
    public function index()
    {
        $projectsData = config('projects');
        $projects = collect($projectsData)->take(3)->map(function ($project) {
            $thumbnail = $project['thumbnail'];
            if (!\Illuminate\Support\Str::startsWith($thumbnail, ['http://', 'https://'])) {
                $thumbnail = asset($thumbnail);
            }
            return new Fluent($project + ['thumbnail_url' => $thumbnail, 'image_url' => $thumbnail]);
        });
        
        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projectsData = config('projects');
        $projects = collect($projectsData)->map(function ($project) {
            $thumbnail = $project['thumbnail'];
            if (!\Illuminate\Support\Str::startsWith($thumbnail, ['http://', 'https://'])) {
                $thumbnail = asset($thumbnail);
            }
            return new Fluent($project + ['thumbnail_url' => $thumbnail, 'image_url' => $thumbnail]);
        });

        return view('projects.index', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}
