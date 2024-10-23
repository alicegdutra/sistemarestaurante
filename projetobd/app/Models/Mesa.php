<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',        // Número da mesa
        'capacidade',    // Capacidade de pessoas da mesa
        'disponivel',    // Status de disponibilidade da mesa
        'localizacao',   // Localização da mesa (ex: interno, externo)
    ];
}
