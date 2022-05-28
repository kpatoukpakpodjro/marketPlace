<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boutique extends Model
{
    use HasFactory;
    protected $table = 'boutiques' ;
    public $timestamps = false ;
    protected $fillable = [
        'nom',
        'description',
        'rating',
        'marchand_id'
    ];

    public function contrat()
    {
        return $this->belongsTo(contrat::class);
    }

    public function reference(){ 
        return $this->belongsTo(reference::class); 
    }

    public function marchand()
    {
        return $this->hasOne(marchand::class);
    }

}
