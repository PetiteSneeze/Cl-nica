<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diagnostico;
use App\Models\Encaminhamento;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class EncaminhamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $paciente = Paciente::where('user_id', $userId)->get();
        $pacientesId = $paciente->pluck("id");
        $encaminhamento = Encaminhamento::whereIn('encaminhamento', $paciente)->get();
        return view('encaminhamento.index', compact('encaminhamento', 'pacientesId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        return view('encaminhamento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Encaminhamento::create($request->all());
        return redirect()->route('encaminhamento.index')
                                ->with('insercao','Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $encaminhamento = Encaminhamento::findOrfail($id);
        return view('encaminhamento.show', compact('encaminhamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $encaminhamento = Encaminhamento::findOrfail($id);
        return view('encaminhamento.edit', compact('encaminhamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $encaminhamento = Encaminhamento::findOrfail($id);
        $encaminhamento->update($request->all());
        return redirect()->route('encaminhamento.index')
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
