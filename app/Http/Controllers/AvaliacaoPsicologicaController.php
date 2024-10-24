<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvaliacaoPsicologica;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class AvaliacaoPsicologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $paciente = Paciente::where('user_id', $userId)->get();
        $pacientesId = $paciente->pluck("id");
        $avaliacao = AvaliacaoPsicologica::whereIn('paciente_id', $pacientesId)->get();
        return view('avaliacao.index', compact('avaliacao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        return view('avaliacao.create', compact("pacientes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        AvaliacaoPsicologica::create($request->all());

        return redirect()->route('avaliacao.index')
                                ->with('insercao','Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $avaliacao = AvaliacaoPsicologica::findOrfail($id);
        return view('avaliacao.show', compact('avaliacao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $avaliacao = AvaliacaoPsicologica::findOrfail($id);
        $pacientes = Paciente::all();
        return view('avaliacao.edit', compact('avaliacao', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $avaliacao = AvaliacaoPsicologica::findOrfail($id);
        $avaliacao->update($request->all());
        return redirect()->route('avaliacao.index')
                                ->with('atualizacao','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
