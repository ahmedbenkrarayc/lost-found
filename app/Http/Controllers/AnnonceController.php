<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Category;

class AnnonceController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getAll(){
        $annonces = Annonce::with('category')->get();
        return response()->json($annonces);
    }

    public function create(){
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'place' => 'required|string',
            'phone' => 'required|string',
            'type' => 'required|string',
            'category_id' => 'required|exists:category,id'
        ]);
    
        $file = $request->file('cover');
        $fileName = 'cover_' . time() . '_' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('assets/images', $fileName, 'public');
        $validated['cover'] = $filePath;
    
        $validated['users_id'] = Auth::id();
        $annonce = Annonce::create($validated);
    
        return back()->with('success', 'Annonce created successfully!');
    }
    

    public function show($id)
    {
        $annonce = Annonce::with('category', 'comments.user')->findOrFail($id);
        return view('details', compact('annonce'));
    }

    public function update(Request $request, Annonce $annonce)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'cover' => 'nullable|string',
            'date' => 'sometimes|required|date',
            'place' => 'sometimes|required|string',
            'phone' => 'sometimes|required|string',
            'type' => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:categories,id',
            'users_id' => 'sometimes|required|exists:users,id',
        ]);

        $annonce->update($validated);
        return response()->json($annonce);
    }

    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return response()->json(['message' => 'Annonce deleted successfully']);
    }
}
