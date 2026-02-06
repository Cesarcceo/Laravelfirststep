<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorie\PutRequest;
use App\Http\Requests\Categorie\StoreRequest;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::paginate(3);
        return view('dashboard.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = new Categorie(); 
        return view('dashboard.categorie.create', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Categorie::create($request->validated());

        return to_route('categorie.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        return view('dashboard.categorie.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('dashboard.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Categorie $categorie)
    {
        $categorie->update($request->validated());
        return to_route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return to_route('categorie.index');
    }
}
