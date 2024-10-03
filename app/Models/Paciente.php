<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", 
                            "nome",
                            "endereco",
                            "data_nascimento",
                            "telefone",
                            "email"
                        ];

}
