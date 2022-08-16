<?php 

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Carro extends Model
{
    use HasFactory;

    protected $table = 'tb_carros1';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'modelo',
        'ano',
        'placa',
        'type',
    ];
}