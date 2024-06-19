<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() 
    {
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        return view('admin.home', compact('vagas'));
    }
}
