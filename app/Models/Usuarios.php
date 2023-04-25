<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarios extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = ('usuarios');
    protected $primaryKey = 'id_usuario';
    public $incrementing = true;
    protected $keyTipe = 'int';
    public $timestamps = false;
}
