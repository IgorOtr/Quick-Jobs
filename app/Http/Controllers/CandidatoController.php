<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use App\Models\Vaga;
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
        $success = session('message');

        return view('home', compact('vagas', 'success'));
    }

    public function returnError()
    {
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        $error = session('message');

        return view('home', compact('vagas', 'error'));
    }

    public function getCandidatosBySlug(string $vaga)
    {
        $candidatos = DB::table('candidatos')->where('slug_vaga', $vaga)->get();
        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        $titulo_vaga = DB::table('vagas')->where('slug', $vaga)->get('titulo');

        return view('admin.candidatos', compact('candidatos', 'vagas', 'titulo_vaga'));
    }

    public function filterArrayTeste(string $opt, array $array): array
    {
        $arrayFiltrado = array_filter($array, function ($alt) use ($opt) {
            return $alt == "q";
        });

        $arrayFiltradoReindexado = array_values($arrayFiltrado);

        return $arrayFiltradoReindexado;
    }

    public function formataTelefone($numero){

        if(strlen($numero) == 10){
            $novo = substr_replace($numero, '(', 0, 0);
            $novo = substr_replace($novo, '9', 3, 0);
            $novo = substr_replace($novo, ')', 3, 0);
        }else{
            $novo = substr_replace($numero, '(', 0, 0);
            $novo = substr_replace($novo, ')', 3, 0);
        }

        return $novo;
    }

    public function store(Request $request, Candidato $candidato, Vaga $vaga)
    {

        $teste_disc = [
            $request->q1, 
            $request->q2,
            $request->q3,
            $request->q4,
            $request->q5,
            $request->q6,
            $request->q7,
            $request->q8,
            $request->q9,
            $request->q10,
            $request->q11,
            $request->q12,
            $request->q13,
            $request->q14,
            $request->q15,
            $request->q16,
            $request->q17,
            $request->q18,
            $request->q19,
            $request->q20,
            $request->q21,
            $request->q22,
            $request->q23,
            $request->q24,
            $request->q25,
        ];

        $validated = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'data_nasc' => 'required',
            'titulo_vaga' => 'required',
            'slug_vaga' => 'required',
            'resumo_prof' => 'required',
            'resumo_acad' => 'required'
        ]);

        // dd($validated);

        $emailAlreadyExist = DB::table('candidatos')->where('email', $validated['email'])->where('titulo_vaga', $validated['titulo_vaga'])->get();

        if ($emailAlreadyExist->count() > 0) {

            return redirect()->route('error')->with('message', 'Este email já foi cadastrado em nosso sistema.');
        }

        if (!$teste_disc) {
            return redirect()->route('error')->with('message', 'Para concluir sua cadidatura, realize completamente o teste.');
        }

        if (count($teste_disc) != 25) {
            return redirect()->route('error')->with('message', 'Você não respondeu ao teste, completamente. Volte e responda, para concluir sua candidatura.');
        }

        if ($request->file('file_name')) {
            
            $file = $request->file('file_name');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'pdf') {
                return redirect()->route('error')->with('message', 'São permitidos apenas arquivos em formado de PDF.');
            }

            $file_name = md5(time()) . '.' . $extension;

            if (!$file->move('assets/files', $file_name)) {

                return redirect()->route('error')->with('message', 'Não foi possível concluir sua cadidatura. Preencha novamente o formulário.');
            }

            $candidato->file_name = $file_name;

        } else {

            $candidato->file_name = "";
        }

        $candidato->nome = $validated['nome'];
        $candidato->email = $validated['email'];
        $candidato->telefone = self::formataTelefone($validated['telefone']);
        $candidato->data_nascimento = Carbon::parse($validated['data_nasc'])->format('d/m/Y');
        $candidato->titulo_vaga = $validated['titulo_vaga'];
        $candidato->slug_vaga = $validated['slug_vaga'];
        $candidato->resumo_prof = $validated['resumo_prof'];
        $candidato->resumo_acad = $validated['resumo_acad'];
        $candidato->teste_disc = json_encode($teste_disc);

        if ($candidato->save()) {

            return redirect()->route('success')->with('message', 'Sua candidatura foi realizada com sucesso.');
        }
    }
}

// $array = array("I", "C", "A", "C","A","V","I","C","A","C","A","O","I","A","I","C","I","C","O","A","A","A","I","C");
