<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sufragantes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = ('sufragantes');
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyTipe = 'int';
    public $timestamps = true;

}
