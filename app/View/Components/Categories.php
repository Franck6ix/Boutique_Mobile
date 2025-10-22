<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Hamcrest\Core\AllOf;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * RENDU
     */
    public function render(): View|Closure|string
    {
        
        //recupéré toute les categories
        $categories = Category::limit(7)->get();
        
        // Affichage du tableau pour verifier si les données sont presentes.
        //dd($Categories);
        
        return view('components.categories', compact('categories'));
    }
}