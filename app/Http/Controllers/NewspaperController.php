<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newspaper;
class NewspaperController extends Controller
{
    public function index()
    {
        $newspapers = Newspaper::all();
        return view('newspapers.index', compact('newspapers'));
    }

    public function create()
    {
        return view('newspapers.create');
    }

    public function store(Request $request)
    {
        $newspaper = Newspaper::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('newspapers.index')->with('success', 'Newspaper created successfully.');
    }
    function show( $newspaper)
    {
        $newspaper = Newspaper::findOrFail($newspaper);
        return view('newspapers.show', ["newspaper" => $newspaper]);
    }

    public function edit(Newspaper $newspaper)
    {
        return view('newspapers.edit', compact('newspaper'));
    }

    public function update(Request $request, Newspaper $newspaper)
    {

        $newspaper->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('newspapers.index')->with('success', 'Newspaper updated successfully.');
    }

    public function destroy(Newspaper $newspaper)
    {
        $newspaper->delete();

        return redirect()->route('newspapers.index')->with('success', 'Newspaper deleted successfully.');
    }
}
