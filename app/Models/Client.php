<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $fillable = ['id','username', 'password', 'email', 'strada', 'oras', 'tara', 'codpostal', 'nrcard', 'tipcard', 'dataexpcard', 'acceptare_emai', 'nrinregRC', 'nume', 'codfiscal'];
}
