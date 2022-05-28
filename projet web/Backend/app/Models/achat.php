<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'achats';
    protected $fillable = [
        'date_achat',
    ];

    public function produit(){ 
        return $this->belongsTo(produit::class); 
    }
    public function client(){ 
        return $this->belongsTo(client::class); 
    }

}
