<?php

namespace App\Http\Controllers\Admin\Sila;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SilaController extends Controller
{
    public function index() {
        return view ('Sila.sila');
    }
}
