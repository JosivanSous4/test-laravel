<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    protected $primaryKey = 'id';
    public $timetamps = true;

    protected $fillable = [
        'addres',
        'number',
        'neighborhood',
        'city',
        'state',
        'cep',
    ];
}
