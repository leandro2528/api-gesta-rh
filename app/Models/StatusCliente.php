<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\StatusCliente;

class StatusCliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];
    public function clientes() {
        return $this->hasMany(Cliente::class, 'status_id');
    }
}
