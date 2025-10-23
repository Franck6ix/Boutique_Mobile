@extends('Layout.app')

@section('content')
<!--Grille produit-->
<!--Grille produit mobile 1 produit par rangé-->
<!--Grille produit Tablette 2 produit par rangé-->
<!--Grille produit ordinateur 4 produit par rangé-->

<div class="grid grid-cols-1 md:grid-cols-3 mg:grid-cols-4 gap-9">

@forelse ($products as $product)
    <x-card-product/>

@empty
    Pas de produit en Bases
@endforelse
    
</div>


@endsection
