<?php

namespace App\Http\Controllers;

use App\Models\Sufragantes;
use Illuminate\Http\Request;

class sufragantesController extends Controller
{
    public function index() {
        return view ('sufragantes');
    }
}
