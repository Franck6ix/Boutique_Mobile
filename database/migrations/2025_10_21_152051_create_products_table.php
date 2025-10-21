<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); //Liens des entités via la clé etrangere et //suppression en cascade lié a la categorie   
            $table->string('name');
            $table->string('image')->nullable(); // peut etre nul
            $table->text('description')->nullable(); // peut etre nul
            $table->boolean('news')->default(false); // valeur par default faux
            $table->float('price',10,2); // maximum 2 chiffre apres la virgule
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};