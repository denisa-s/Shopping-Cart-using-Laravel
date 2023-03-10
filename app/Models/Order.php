<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     public $fillable = ['id','total', 'clientID', 'data_introducerii', 'stare_comanda'];
}
