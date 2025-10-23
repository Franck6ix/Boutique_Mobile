<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $filable = [
        
        'category_id','name','image','description','news','price'
    ];
    

 /* Get the user that owns the Product
 *
 * @return BelongsTo
 */
public function category(): BelongsTo
{
    return $this->belongsTo(Category::class);
}


    
}