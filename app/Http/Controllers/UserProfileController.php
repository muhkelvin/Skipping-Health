<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $user->update($request->all());

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
