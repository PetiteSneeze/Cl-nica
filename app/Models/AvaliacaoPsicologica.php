<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class AvaliacaoPsicologica extends Model
{
    use HasFactory;

    protected $fillable = ["data_avaliacao", 
                            "paciente_id",
                            "observacoes"
                        ];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

}
