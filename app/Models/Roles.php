<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = ('roles');
    protected $primaryKey = 'codigo_rol';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
