<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Client;
use \App\Models\Product;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'cliente_id',
        'produto_id',
        'quantidade',
        'preco_unitario',
        'preco_total'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'cliente_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
