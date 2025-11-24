<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}
