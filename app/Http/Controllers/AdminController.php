<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function dashboard()
    {
        $projects = Project::all();
        return view('admin.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|url', // For now assuming URL, or we can handle file upload later if needed
            'link' => 'nullable|url',
            'category' => 'required|in:data,development',
            'tags' => 'nullable|string', // Comma separated
        ]);

        if ($validated['tags']) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
        }

        Project::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|url',
            'link' => 'nullable|url',
            'category' => 'required|in:data,development',
            'tags' => 'nullable|string',
        ]);

        if ($validated['tags']) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
        }

        $project->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Project deleted successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
