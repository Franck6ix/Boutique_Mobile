<?php

 namespace	App\Filament\Widgets;
 //	Import	des	classes	nécessaires
 use	App\Models\Product;
 use	App\Models\Category;
 use	Filament\Widgets\StatsOverviewWidget	as	BaseWidget;
 use	Filament\Widgets\StatsOverviewWidget\Stat;
 /**
 *	Widget	StatsOverview	-	Affiche	des	statistiques	sur	le	dashboard
 *	
*	Un	widget	est	un	bloc	qui	s'affiche	sur	le	tableau	de	bord	(dashboard)
 *	de	Filament.	Ce	widget	affiche	3	cartes	de	statistiques	:
 *	-	Nombre	total	de	produits
 *	-	Nombre	de	nouveautés
 *	-	Nombre	de	catégories
 *	
*	Les	widgets	permettent	de	donner	un	aperçu	rapide	des	données	importantes
 */
 class	StatsOverview	extends	BaseWidget
 {
 /**
 *	Méthode	getStats()	-	Définit	les	statistiques	à	afficher
 *	
*	Retourne	un	tableau	de	"Stat"	(cartes	de	statistiques)
 *	Chaque	Stat	représente	une	carte	avec	:
 *	-	Un	titre
					*	-	Une	valeur	(nombre)
					*	-	Une	description
					*	-	Une	icône
					*	-	Une	couleur
					*	
					*	@return	array	Tableau	de	statistiques
					*/
				protected	function	getStats():	array
				{
								return	[
/**
	*	STATISTIQUE	1	:	Total	des	produits
	*	Compte	tous	les	produits	dans	la	base	de	données
	*/
Stat::make('Total	Produits',	Product::count())
				//	description()	:	Texte	explicatif	sous	le	nombre
				->description('Nombre	total	de	produits')
				//	descriptionIcon()	:	Icône	à	côté	de	la	description
				->descriptionIcon('heroicon-m-shopping-bag')
				//	color()	:	Couleur	de	la	carte
				//	'success'	=	Vert	(couleur	positive)
				->color('success'),
/**
	*	STATISTIQUE	2	:	Nombre	de	nouveautés
	*	Compte	uniquement	les	produits	où	news	=	true
	*	
	*	where('news',	true)	=	Filtre	SQL	:	WHERE	news	=	1
	*	count()	=	Compte	le	nombre	de	résultats
	*/
Stat::make('Nouveautés',	Product::where('news',	true)->count())
				->description('Produits	en	nouveauté')
				//	Icône	d'étoile/étincelle	pour	les	nouveautés
				->descriptionIcon('heroicon-m-sparkles')
				//	'warning'	=	Orange/Jaune	(attire	l'attention)
				->color('warning'),
/**
	*	STATISTIQUE	3	:	Nombre	de	catégories
	*	Compte	toutes	les	catégories
	*/
Stat::make('Catégories',	Category::count())
				->description('Nombre	de	catégories')
				//	Icône	de	dossier	pour	les	catégories
				->descriptionIcon('heroicon-m-folder')
				//	'primary'	=	Bleu	(couleur	principale	de	l'app)
				->color('primary'),
								];
				}
 }