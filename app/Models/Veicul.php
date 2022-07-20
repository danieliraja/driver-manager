<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veicul extends Model
{
    use HasFactory;
    protected $table = 'veiculos';
    protected $fillable = ['placa', 'modelo', 'marca', 'cor'];

}
