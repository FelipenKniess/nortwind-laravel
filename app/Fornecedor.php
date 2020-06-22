<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model{
    public    $timestamps = false;
    protected $primaryKey = 'IDFornecedor';
    protected $table = 'fornecedores';
    protected $fillable = ['IDFornecedor','NomeCompanhia', 'NomeContato', 'TItuloContato', 'Endereco', 'Cidade','Regiao','cep','Pais','Telefone','Fax','Website'];
}
