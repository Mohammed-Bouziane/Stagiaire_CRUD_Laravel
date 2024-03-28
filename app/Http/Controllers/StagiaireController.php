<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaire = Stagiaire::orderBy('created_at', 'DESC')->get();
  
        return view('stagiaires.index', compact('stagiaire'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaires.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stagiaire::create($request->all());
 
        return redirect()->route('stagiaires')->with('success', 'Stagiaire added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
  
        return view('stagiaires.show', compact('stagiaire'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
  
        return view('stagiaires.edit', compact('stagiaire'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
  
        $stagiaire->update($request->all());
  
        return redirect()->route('stagiaires')->with('success', 'stagiaire updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
  
        $stagiaire->delete();
  
        return redirect()->route('stagiaires')->with('success', 'stagiaire deleted successfully');
    }
}
