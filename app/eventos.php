<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    //
    protected $fillable = [
      'id', 'imagem_evento','nome_evento', 'local_evento','cidade_evento','resumo_evento', 'created_at', 'valor'
  ];
}
