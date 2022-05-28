<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'references';
    protected $fillable = [
        'boutique_id',
        'produit_id'
    ];

    public function produits(){ 
        return $this->hasMany(produit::class); 
    }
    public function boutiques(){ 
        return $this->hasMany(boutique::class); 
    }
}
