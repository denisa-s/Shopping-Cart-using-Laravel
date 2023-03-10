<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public $fillable = ['produsid','nume', 'pret', 'imagine', 'categorie', 'descriere', 'desc_completa', 'stare', 'oferta', 'noutati', 'cod', 'metal', 'piatra'];
}
