<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Invoice;

class Product extends Model
{
    use HasFactory;
    //use SoftDeletes;
 
    protected $fillable =
    [
        'isbn',
        'nome',
        'autor',
        'editora',
        'isbn',
        'preco'
    ];  

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'product_id');
    }    
}
