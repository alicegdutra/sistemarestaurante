<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',        // Nome do prato
        'descricao',   // Descrição do prato
        'preco',       // Preço do prato
        'categoria',   // Categoria do prato (ex: lanche, bebida, sobremesa)
        'disponivel',  // Status de disponibilidade do prato
    ];
}
