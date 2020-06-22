<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
    public    $timestamps = false;
    protected $primaryKey = 'IDCategoria';
    protected $table = 'categorias';
    protected $fillable = ['IDCategoria', 'NomeCategoria', 'Descricao', 'Figura'];
}
