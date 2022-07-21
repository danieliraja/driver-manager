<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table = 'motoristas';
    protected $fillable = [
        'nome_completo',
        'cnh',
        'tipo_cnh',
        'veiculo_marca',
        'veiculo_modelo',
        'veiculo_placa',
        'veiculo_cor',
        'endereco',
        'cidade',
        'estado',
    ];

}
