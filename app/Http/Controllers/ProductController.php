<?php

namespace    App\Http\Controllers;
//	Import	des	classes	nécessaires
use    App\Models\Product;
use    App\Models\Category;
use    Illuminate\Http\Request;

/**
 *	ProductController	-	Contrôleur	pour	les	pages	publiques
 *	
 *	Ce	contrôleur	gère	l'affichage	des	produits	côté	FRONT	(partie	publique)
 *	à	ne	pas	confondre	avec	Filament	qui	gère	le	BACK-OFFICE	(admin)
 *	
 *	Un	contrôleur	contient	des	méthodes	qui	répondent	aux	routes	web
 *	Chaque	méthode	correspond	généralement	à	une	page
 */
class    ProductController    extends    Controller
{
    /**
     *	Méthode	index()	-	Affiche	la	liste	des	produits	(page	d'accueil)
     *	
     *	Cette	méthode	est	appelée	quand	l'utilisateur	visite	la	page	d'accueil
     *	Elle	récupère	les	données	et	les	passe	à	la	vue
     *	
     *	@return	\Illuminate\View\View	La	vue	avec	les	données
     */
    public    function    index()
    {
        /**
         *	Récupération	des	produits	avec	pagination
         *	
         *	Product::with('category')	:	Eager	Loading
         *	-	Charge	la	catégorie	en	même	temps	que	le	produit
         *	-	Évite	le	problème	N+1	(requêtes	multiples)
         *	-	Au	lieu	de	faire	1	requête	par	produit	pour	sa	catégorie,
         *			on	fait	1	seule	requête	pour	TOUTES	les	catégories
         *	
         *	->latest()	:	Tri	par	date	de	création	(le	plus	récent	en	premier)
         *	Équivalent	à	:	orderBy('created_at',	'desc')
         *	
         *	->paginate(12)	:	Pagination	automatique
         *	-	Divise	les	résultats	en	pages	de	12	produits
         *	-	Génère	automatiquement	les	liens	de	pagination
         *	-	Retourne	un	objet	LengthAwarePaginator
         */
        $products    =    Product::with('category')
            ->latest()
            ->paginate(12);
        /**
         *	Récupération	des	catégories	avec	comptage
         *	
         *	Category::withCount('products')	:	Compte	les	produits	liés
         *	-	Ajoute	une	colonne	virtuelle	'products_count'
         *	-	Accessible	via	:	$category->products_count
         *	-	Optimisé	:	fait	un	GROUP	BY	avec	COUNT	en	SQL
         *	
         *	->get()	:	Récupère	TOUTES	les	catégories	(sans	pagination)
         */
        $categories    =    Category::withCount('products')->get();
        /**
         *	Retour	de	la	vue	avec	les	données
         *	
         *	view('products.index',	...)	:
         *	-	Cherche	le	fichier	:	resources/views/products/index.blade.php
         *	-	Le	.blade.php	est	automatiquement	ajouté
         *	
         *	compact('products',	'categories')	:
         *	-	Passe	les	variables	à	la	vue
         *	-	Équivalent	à	:	['products'	=>	$products,	'categories'	=>	$categories]
         *	-	Dans	la	vue,	on	pourra	utiliser	$products	et	$categories
         */
        return    view('products.index',    compact('products',    'categories'));
    }
    /**
     *	Méthode	show()	-	Affiche	les	détails	d'un	produit
     *	
     *	Cette	méthode	est	appelée	quand	on	clique	sur	un	produit
     *	pour	voir	ses	détails	complets
     *	
     *	@param	Product	$product	Le	produit	à	afficher	(injecté	automatiquement)
     *	@return	\Illuminate\View\View	La	vue	avec	le	produit
     *	
     *	ROUTE	MODEL	BINDING	:
     *	Laravel	injecte	automatiquement	le	produit	en	fonction	de	l'ID	dans	l'URL
     *	Exemple	:	/products/5	→	Laravel	récupère	le	Product	avec	id=5
     *	Si	le	produit	n'existe	pas,	Laravel	retourne	automatiquement	une	erreur	404
     */
    public    function    show(Product    $product)
    {
        /**
         *	Retour	de	la	vue	avec	le	produit
         *	
         *	compact('product')	:	Passe	le	produit	à	la	vue
         *	Dans	la	vue	products/show.blade.php,	on	pourra	afficher	:
         *	-	$product->name
         *	-	$product->description
         *	-	$product->price
         *	-	$product->category->name
         *	-	etc.
         */
        return    view('products.show',    compact('product'));
    }
}