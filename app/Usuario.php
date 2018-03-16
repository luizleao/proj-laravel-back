<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    #protected $table = "Usuario";
    #protected $fillable = ['id', 'login', 'senha', 'nome', 'ativo', 'grupo'];
    
    #Configurações Mongo
    protected $collection = "Usuario";
    protected $fillable = ['id', 'login', 'senha', 'nome', 'ativo', 'grupo'];
    protected $connection = "mongodb";
    
}
