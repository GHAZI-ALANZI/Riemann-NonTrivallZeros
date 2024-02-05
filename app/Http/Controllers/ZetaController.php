<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZetaController extends Controller
{

public function getZeros()
{
    $zeros = DB::table('riemann_zeros')->get();
    return view('zeros_chart', ['zeros' => $zeros]);
}

}
