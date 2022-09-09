<?php

namespace App\Models;

class Produk extends Model{
    protected $table = 'produk';

    protected $casts= [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga' => 'decimal:3'

    ];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaStringAtrribute(){
        return "Rp.".number_format( $this->stringattribute['harga']);
    }


}