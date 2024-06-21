<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use voku\helper\ASCII;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $vagas = DB::table('vagas')->get();
        return view('admin.vagas', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $vagas = DB::table('vagas')->where('status', 'Ativo')->get();
        return view('admin.add', compact('vagas'));
    }

    public function toAscii($str, $replace = array(), $delimiter = '-')
	{
		if (!empty($replace)) {
			$str = str_replace((array)$replace, ' ', $str);
		}
		$clean = str_replace('�', 'c', $str);
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

		return $clean;
	}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required',
            'atividades' => 'required',
            'requisitos' => 'required',
            'status' => 'required'
        ]);

        $vagas = new Vaga();

        $vagas->titulo = $validated['titulo'];
        $vagas->atividades = $validated['atividades'];
        $vagas->requisitos = $validated['requisitos'];
        $vagas->status = $validated['status'];

        $slug = self::toAscii($validated['titulo'], ' ');
        $vagas->slug = $slug;

        $img = $request->file('img_capa');
        $img_name = md5(time()) . '.' . $img->getClientOriginalExtension();
        $img->move('assets/img/vagas', $img_name);

        $vagas->img_capa = $img_name;

        if ($vagas->save()) {

            $success = '';

            return redirect()->route('vagas')->with(['success', 'Vaga adicionada com sucesso!']);

        } else {

            $error = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Erro ao adicionar vaga!</strong> Tente novamente.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        
            return redirect()->route('show-form-to-create')->with(['error' => $error]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaga $vaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vaga $vaga, string $id)
    {
        $vagas = DB::table('vagas')->where('id', $id)->get();
        return view('admin.edit', compact('vagas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $vaga = Vaga::find($request->id);
        
        if ($vaga) {

            $vaga->titulo = $request->titulo;
            $vaga->atividades = $request->atividades;
            $vaga->requisitos = $request->requisitos;

            $slug = self::toAscii($request->titulo, ' ');
            $vaga->slug = $slug;
            $vaga->status = $request->status;

            $img = $request->file('img_capa');

                if ($img){

                    $img_name = md5(time()).'.'.$img->getClientOriginalExtension();
                    $img->move('assets/img/vagas', $img_name);
                    $vaga->img_capa = $img_name;
                }

            $vaga->save();
        }

        return redirect()->route('vagas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vagas = Vaga::find($id);

        if (!$vagas) {
            return abort(404);
        }

        $vagas->delete();


        return redirect()->route('vagas');
    }
}
