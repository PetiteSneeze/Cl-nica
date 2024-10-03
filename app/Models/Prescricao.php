<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Prescricao extends Model
{
    use HasFactory;
    protected $fillable = [
        'paciente_id',
        'descricao',
        'data',
    ];
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
