<?php

namespace App\Http\Controllers;

use App\Models\SkippingRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkippingRecordController extends Controller
{
    public function index()
    {
        $records = SkippingRecord::where('user_id', Auth::id())->get();
        return view('skipping.index', compact('records'));
    }

    public function create()
    {
        return view('skipping.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumps' => 'required|integer',
            'date' => 'required|date',
        ]);

        SkippingRecord::create([
            'user_id' => Auth::id(),
            'jumps' => $request->jumps,
            'date' => $request->date,
        ]);

        return redirect()->route('skipping.index')->with('success', 'Skipping record created successfully.');
    }

    public function show($id)
    {
        $record = SkippingRecord::findOrFail($id);
        return view('skipping.show', compact('record'));
    }

    public function edit($id)
    {
        $record = SkippingRecord::findOrFail($id);
        return view('skipping.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $record = SkippingRecord::findOrFail($id);
        $request->validate([
            'jumps' => 'required|integer',
            'date' => 'required|date',
        ]);

        $record->update($request->all());

        return redirect()->route('skipping.index')->with('success', 'Skipping record updated successfully.');
    }

    public function destroy($id)
    {
        $record = SkippingRecord::findOrFail($id);
        $record->delete();

        return redirect()->route('skipping.index')->with('success', 'Skipping record deleted successfully.');
    }
}
