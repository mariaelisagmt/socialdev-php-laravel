<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    public $timestamps   = false;
    public $incrementing = false;

    protected $table      = 'usuarios';
    protected $keyType    = 'string';
    protected $primaryKey = 'usr_codigo';

    //Dados que podem ser passados
    protected $fillable = ['usr_codigo', 'usr_nome', 'usr_email', 'usr_senha', 'usr_telefone'];

    //Campos protegidos
    protected $hidden = ['usr_senha', 'remember_token'];

    //Mudança de tipos
    protected $casts = [
        //'usr_codigo' => 'string'
    ];

    public function getAuthPassword()
    {
        return $this->usr_senha;
    }
    public function getAuthIdentifier()
    {
        return $this->usr_codigo;
    }


}
