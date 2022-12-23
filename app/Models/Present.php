<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Present extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'cognome', 'citta', 'indirizzo', 'n_regalo', 'code_spedizione', 'camino', 'status', 'desc_regalo'];
}