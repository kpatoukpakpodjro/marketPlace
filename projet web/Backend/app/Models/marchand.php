<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marchand extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $table = 'marchands';
    protected $fillable = [
        'nom',
        'adresse',
        'tel'
    ];

    public function boutique()
    {
        return $this->belongsTo(boutique::class);
    }

    public function user()
    {
        return $this->hasOne(user::class);
    }
}
