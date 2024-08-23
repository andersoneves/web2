<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poduto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descricao',
        'preco',
    ];

    return Produto::orderBy('name')->get();

}
