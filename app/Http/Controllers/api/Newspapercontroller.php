<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Newspaper;
use Illuminate\Http\Request;
class NewspaperController extends Controller
{function index()
    {
        $newspaper = Newspaper::all();
        return response()->json([
            "status" => 200,
            'data' => $newspaper
        ]);
    }
    
    function store(Request $request)
    {
        $newspaper = Newspaper::create($request->all());
        return response()->json([
            "status" => 200,
            'data' => $newspaper
        ]);
    }
    
    function show(Newspaper $newspaper)
    {
         $newspaper = Newspaper::findOrFail($newspaper);
         return response()->json([
            "status" => 200,
            'data' => $newspaper
        ]);
    }
    
    function update(Request $request, Newspaper $newspaper)
    {
        $newspaper->update($request->all());
        return response()->json([
            "status" => 200,
            'data' => $newspaper
        ]);
    }
    
    function destroy(Newspaper $newspaper)
    {
        $newspaper->delete();
        return response()->json([
            "status" => 200,
            'data' => $newspaper
        ]);
    }
    }
