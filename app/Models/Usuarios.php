<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Roles;



class Usuarios extends  Authenticatable 
{
    use HasFactory, SoftDeletes;

    protected $table = 'usuarios';

    protected $fillable = [
        'u_nombre',
        'u_usuario',
        'u_password',
        'u_email',
        'u_fecha',
    ];

    protected $primaryKey = 'id_usuario';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'usuario_roles');
    }
}
