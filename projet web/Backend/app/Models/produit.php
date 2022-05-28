<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'produits';
    protected $fillable = [
        'titre',
        'description',
        'prix',
        'qtite'
    ];
    public function categorie(){ 
        return $this->belongsTo(Categorie::class); 
    }

    public function reference(){ 
        return $this->belongsTo(reference::class); 
    }

    public function achats(){ 
        return $this->hasMany(achat::class); 
    }
}
