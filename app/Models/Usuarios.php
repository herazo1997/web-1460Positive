<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarioAdmin extends Model
{
    use HasFactory;
    use SoftDeletes;  //Para trabajar con la columna deleted_at

    protected $table = ('usuarios');
    protected $primaryKey = 'id_usuario';
    protected $keyTipe = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
