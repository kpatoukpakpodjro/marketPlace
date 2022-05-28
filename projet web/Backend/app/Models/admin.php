<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'admins';
    protected $fillable = [
        'nom',
        'adresse',
        'tel'
    ];

    public function contrats(){ 
        return $this->hasMany(achat::class); 
    }

    public function user()
    {
        return $this->hasOne(user::class);
    }
}
