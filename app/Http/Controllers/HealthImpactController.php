<?php

namespace App\Http\Controllers;

use App\Models\HealthImpact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthImpactController extends Controller
{
    public function index()
    {
        $healthImpacts = HealthImpact::where('user_id', Auth::id())->get();
        return view('health-impacts.index', compact('healthImpacts'));
    }

    public function create()
    {
        return view('health-impacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jump_count' => 'required|integer',
        ]);

        $jumpCount = $request->jump_count;

        // Hitung nilai-nilai otomatis
        $caloriesBurned = $jumpCount * 0.1; // Misalnya, 0.1 kalori per lompatan
        $heartHealth = $this->calculateHealthMetric($jumpCount, 0.05);
        $muscleStrength = $this->calculateHealthMetric($jumpCount, 0.03);
        $flexibility = $this->calculateHealthMetric($jumpCount, 0.02);
        $recommendations = $this->getRecommendations($jumpCount);

        HealthImpact::create([
            'user_id' => Auth::id(),
            'jump_count' => $jumpCount,
            'calories_burned' => $caloriesBurned,
            'heart_health' => $heartHealth,
            'muscle_strength' => $muscleStrength,
            'flexibility' => $flexibility,
            'recommendations' => $recommendations,
        ]);

        return redirect()->route('health-impacts.index')->with('success', 'Health impact record created successfully.');
    }
    public function show($id)
    {
        $healthImpact = HealthImpact::findOrFail($id);
        return view('health-impacts.show', compact('healthImpact'));
    }

    public function edit($id)
    {
        $healthImpact = HealthImpact::findOrFail($id);
        return view('health-impacts.edit', compact('healthImpact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jump_count' => 'required|integer',
        ]);

        $jumpCount = $request->jump_count;

        // Hitung nilai-nilai otomatis
        $caloriesBurned = $jumpCount * 0.1; // Misalnya, 0.1 kalori per lompatan
        $heartHealth = $this->calculateHealthMetric($jumpCount, 0.05);
        $muscleStrength = $this->calculateHealthMetric($jumpCount, 0.03);
        $flexibility = $this->calculateHealthMetric($jumpCount, 0.02);
        $recommendations = $this->getRecommendations($jumpCount);

        $healthImpact = HealthImpact::findOrFail($id);
        $healthImpact->update([
            'jump_count' => $jumpCount,
            'calories_burned' => $caloriesBurned,
            'heart_health' => $heartHealth,
            'muscle_strength' => $muscleStrength,
            'flexibility' => $flexibility,
            'recommendations' => $recommendations,
        ]);

        return redirect()->route('health-impacts.index')->with('success', 'Health impact record updated successfully.');
    }

    public function destroy($id)
    {
        $healthImpact = HealthImpact::findOrFail($id);
        $healthImpact->delete();

        return redirect()->route('health-impacts.index')->with('success', 'Health impact record deleted successfully.');
    }

    private function calculateHealthMetric($jumpCount, $rate)
    {
        return $jumpCount * $rate;
    }

    private function getRecommendations($jumpCount)
    {
        if ($jumpCount < 100) {
            return 'Try to increase your jumping frequency for better results.';
        } elseif ($jumpCount < 500) {
            return 'Good job! Keep up the good work.';
        } else {
            return 'Excellent performance! You are making great progress.';
        }
    }
}
