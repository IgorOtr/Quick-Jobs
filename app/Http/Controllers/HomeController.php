<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() 
    {
        $vagas = DB::table('vagas')->where('status', 'Ativo')->orderBy('id', 'desc')->limit(5)->get();
        $candidatos = DB::table('candidatos')->limit(5)->get();
        $curriculos = DB::table('candidatos')->where('file_name','<>','')->get('file_name');
        return view('admin.home', compact('vagas','candidatos', 'curriculos'));
    }
}
