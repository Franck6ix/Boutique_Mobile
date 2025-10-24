<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   // recupérer 6 Produits de la base a laide du modele Product
        $products = Product::limit(20)->get();
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Logique de recuperation de données du modèle
        //SELECTE * FROM id , 
        $product = Product::find($id);
        
        return view('detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}