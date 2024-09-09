<?php

namespace App\Http\Controllers;

use App\Models\FitnessGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FitnessGoalController extends Controller
{
    public function index()
    {
        $goals = FitnessGoal::where('user_id', Auth::id())->get();
        return view('goals.index', compact('goals'));
    }

    public function create()
    {
        return view('goals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'daily_target' => 'required|integer',
            'weekly_target' => 'required|integer',
        ]);

        FitnessGoal::create([
            'user_id' => Auth::id(),
            'daily_target' => $request->daily_target,
            'weekly_target' => $request->weekly_target,
        ]);

        return redirect()->route('goals.index')->with('success', 'Fitness goal created successfully.');
    }

    public function show($id)
    {
        $goal = FitnessGoal::findOrFail($id);
        return view('goals.show', compact('goal'));
    }

    public function edit($id)
    {
        $goal = FitnessGoal::findOrFail($id);
        return view('goals.edit', compact('goal'));
    }

    public function update(Request $request, $id)
    {
        $goal = FitnessGoal::findOrFail($id);
        $request->validate([
            'daily_target' => 'required|integer',
            'weekly_target' => 'required|integer',
        ]);

        $goal->update($request->all());

        return redirect()->route('goals.index')->with('success', 'Fitness goal updated successfully.');
    }

    public function destroy($id)
    {
        $goal = FitnessGoal::findOrFail($id);
        $goal->delete();

        return redirect()->route('goals.index')->with('success', 'Fitness goal deleted successfully.');
    }
}

