<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'prix_vip',
        'prix_vvip',
        'grand_public',
        'date_event',
        'lieu_event',
        'password',
        'categorie_id'
    ];

    public function categorie(){

        return $this->belongsTo(categorie::class);
    }

    public function organisateur(){

        return $this->belongsTo(organisateur::class);
    }
    protected $casts = [
        'date_event' => 'datetime',
      ];
    
}
