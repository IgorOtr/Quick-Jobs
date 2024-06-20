<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    public function index()
    {
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        return view('home', compact('vagas'));
    }

    public function returnSuccess()
    {
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        $success = 'Currículo cadastrado com sucesso!';

        return view('home', compact('vagas', 'success'));
    }

    public function returnError()
    {
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        $error = 'Houve um problema! Preencha o formulario com atenção e tente novamente!';

        return view('home', compact('vagas', 'error'));
    }

    
    public function getCandidatosBySlug(string $vaga)
    {
        $candidatos = DB::table('candidatos')->where('slug_vaga', $vaga)->get();
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        $titulo_vaga = DB::table('vagas')->where('slug', $vaga)->get('titulo');

        // return  $candidatos;
        return view('admin.candidatos', compact('candidatos', 'vagas', 'titulo_vaga'));
    }

    public function store(Request $request, Candidato $candidato)
    {

        $validated = $request->validate([
            'nome' =>'required',
            'email' =>'required',
            'telefone' =>'required',
            'data_nasc' =>'required',
            'titulo_vaga' =>'required',
            'slug_vaga' =>'required',
            'resumo_prof' => 'required',
            'resumo_acad' => 'required'
        ]);

        $file = $request->file('file_name');
        $extension = $file->getClientOriginalExtension();


        if ($extension != 'pdf') {
            return redirect()->route('error');
        }

        $file_name = md5(time()).'.'.$extension;
        
        if (!$file->move('assets/files', $file_name)) {

            return redirect()->route('error');
        }

        $candidato->nome = $validated['nome'];
        $candidato->email = $validated['email'];
        $candidato->telefone = $validated['telefone'];
        $candidato->data_nascimento = Carbon::parse($validated['data_nasc'])->format('d/m/Y');
        $candidato->titulo_vaga = $validated['titulo_vaga'];
        $candidato->slug_vaga = $validated['slug_vaga'];
        $candidato->resumo_prof = $validated['resumo_prof'];
        $candidato->resumo_acad = $validated['resumo_acad'];
        $candidato->file_name = $file_name;

        if ($candidato->save()) {

            return redirect()->route('success');
        }

    }

}
