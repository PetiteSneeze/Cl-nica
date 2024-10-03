<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Terapia extends Model
{
    use HasFactory;
    protected $fillable = [
        'paciente_id',
        'data',
        'notas', 
        'tecnica'    
    ];
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
