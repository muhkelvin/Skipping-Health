<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::where('user_id', Auth::id())->get();
        return view('achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        Achievement::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('achievements.index')->with('success', 'Achievement created successfully.');
    }

    public function show($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('achievements.show', compact('achievement'));
    }

    public function edit($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('achievements.edit', compact('achievement'));
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        $achievement->update($request->all());

        return redirect()->route('achievements.index')->with('success', 'Achievement updated successfully.');
    }

    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('achievements.index')->with('success', 'Achievement deleted successfully.');
    }
}
