<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'clients';
    protected $fillable = [
        'nom',
        'adresse',
        'tel'
    ];

    public function achats(){ 
        return $this->hasMany(achat::class); 
    }

    public function user()
    {
        return $this->hasOne(user::class);
    }
}
