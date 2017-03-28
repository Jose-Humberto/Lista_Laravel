<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lanche extends Model
{
    protected $fillable=['nome', 'preco', 'tipo', 'quantidade', 'descricao'];
}
