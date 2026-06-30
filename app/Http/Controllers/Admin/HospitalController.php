<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('admin.hospital.index', compact('hospitals'));
    }

    public function create()
    {
        return view('admin.hospital.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'email' => 'required|email',
        ]);

        Hospital::create($validated);
        return redirect()->route('admin.hospital.index')->with('success', 'Hospital created successfully.');
    }

    public function show($id)
    {
        $hospital = Hospital::findOrFail($id);
        return view('admin.hospital.view', compact('hospital'));
    }

    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        return view('admin.hospital.edit', compact('hospital'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'email' => 'required|email',
        ]);

        $hospital = Hospital::findOrFail($id);
        $hospital->update($validated);
        return redirect()->route('admin.hospital.index')->with('success', 'Hospital updated successfully.');
    }

    public function destroy($id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();
        return redirect()->route('admin.hospital.index')->with('success', 'Hospital deleted successfully.');
    }
}
