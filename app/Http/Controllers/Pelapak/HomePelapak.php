<?php

namespace App\Http\Controllers\Pelapak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePelapak extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pelapak');
    }

    public function index()
    {
        return view('pelapak/dashboard');
    }
}