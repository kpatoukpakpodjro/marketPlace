<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrat extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'contrats';
    protected $fillable = [
        'dateD',
        'dateF'
    ];

    public function admin(){ 
        return $this->belongsTo(admin::class); 
    }
    //relation one to one
    public function boutique()
    {
        return $this->hasOne(boutique::class);
    }
}


