<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coach = Coach::all();
        return view('coach.index', compact('coach'));
    }
    
    public function create()
    {
        return view('coach.create');
    }
    
    public function store(Request $request)
    {
        Coach::create($request->all());
        return redirect('coach')->with('success', 'coach created successfully.');
    }
    
    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coach.edit', compact('coach'));
    }
    
    public function update(Request $request, $id)
    {
        $coach = Coach::findOrFail($id);
        $coach->update($request->all());
        return redirect('coach')->with('success', 'coach updated successfully.');
    }
    
    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();
        return redirect('coach')->with('success', 'coach deleted successfully.');
    }
}
