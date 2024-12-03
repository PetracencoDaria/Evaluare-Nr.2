<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'nume', 'descriere', 'pret', 'stoc', 'tip', 'beneficii','category_id'
    ];
}
