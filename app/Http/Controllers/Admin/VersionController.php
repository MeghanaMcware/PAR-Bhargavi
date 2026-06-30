<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Version;
use Illuminate\Support\Facades\Storage;

class VersionController extends Controller
{
    public function index()
    {
        $versions = Version::all();
        return view('admin.version.index', compact('versions'));
    }

    public function create()
    {
        return view('admin.version.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'type' => 'required|in:new,fix',
            'date' => 'required|date',
            'pdf' => 'required|file|mimes:pdf|max:2048',
            'description' => 'required|string|max:500',
        ]);

        if ($request->hasFile('pdf')) {
            $path = $request->file('pdf')->store('versions', 'public');
            $validated['pdf'] = $path;
        }

        Version::create($validated);
        return redirect()->route('admin.version.index')->with('success', 'Version created successfully.');
    }

    public function show($id)
    {
        $version = Version::findOrFail($id);
        return view('admin.version.view', compact('version'));
    }

    public function edit($id)
    {
        $version = Version::findOrFail($id);
        return view('admin.version.edit', compact('version'));
    }

    public function update(Request $request, $id)
    {
        $version = Version::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'type' => 'required|in:new,fix',
            'date' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
            'description' => 'required|string|max:500',
        ]);

        if ($request->hasFile('pdf')) {
            if ($version->pdf && Storage::disk('public')->exists($version->pdf)) {
                Storage::disk('public')->delete($version->pdf);
            }
            $path = $request->file('pdf')->store('versions', 'public');
            $validated['pdf'] = $path;
        }

        $version->update($validated);
        return redirect()->route('admin.version.index')->with('success', 'Version updated successfully.');
    }

    public function destroy($id)
    {
        $version = Version::findOrFail($id);
        
        if ($version->pdf && Storage::disk('public')->exists($version->pdf)) {
            Storage::disk('public')->delete($version->pdf);
        }
        
        $version->delete();
        return redirect()->route('admin.version.index')->with('success', 'Version deleted successfully.');
    }

    public function toggleStatus(Request $request)
    {
        $version = Version::findOrFail($request->id);
        $version->status = $request->status;
        $version->save();

        return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
    }
}
