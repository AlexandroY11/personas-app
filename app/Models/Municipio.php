<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table = 'tb_municipio';
    protected $primaryKey = 'muni_codi';
    protected $guarded = [];
    public $timestamps = false;
}
