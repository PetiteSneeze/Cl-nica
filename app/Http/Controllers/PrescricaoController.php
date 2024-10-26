<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Prescricao;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;


class PrescricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $paciente = Paciente::where('user_id', $userId)->get();
        $pacientesId = $paciente->pluck("id");
        $prescricao = Prescricao::whereIn('paciente_id', $pacientesId)->get();
        return view('prescricao.index', compact('prescricao', 'pacientesId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        return view('prescricao.create',compact("pacientes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Prescricao::create($request->all());
        return redirect()->route('prescricao.index')
                                ->with('insercao','Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prescricao = Prescricao::findOrfail($id);
        return view('prescricao.show', compact('prescricao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prescricao = Prescricao::findOrfail($id);
        $pacientes = Paciente::all();
        return view('prescricao.edit', compact('prescricao','pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prescricao = Prescricao::findOrfail($id);
        $prescricao->update($request->all());
        return redirect()->route('prescricao.index')
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
