<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'responsavel',
        'seguimento',
        'email',
        'telefone',
        'status_id',
        'valor_contrato',
        'servicos'
    ];
    public function status() {
        return $this->belongsTo(StatusCliente::class, 'status_id');
    }
}
