<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_Roles extends Model
{
    use HasFactory;

    protected $table = ('usuario_roles');
    protected $primaryKey = false;
    public $incrementing = false;
    protected $keyTipe = 'int';
    public $timestamps = false;
}
