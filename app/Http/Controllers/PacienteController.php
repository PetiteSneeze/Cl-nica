<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $userId = Auth::id();

    // Obter o termo de pesquisa
    $search = $request->input('search');

    // Consulta de pacientes com filtro pelo usuário autenticado e pesquisa
    $pacientes = Paciente::where('user_id', $userId)
        ->when($search, function ($query, $search) {
            return $query->where('nome', 'like', '%' . $search . '%')
                         ->orWhere('data_nascimento', 'like', '%' . $search . '%')
                         ->orWhere('telefone', 'like', '%' . $search . '%');
        })
        ->get();

    return view('paciente.index', compact('pacientes'));
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $request->merge(['user_id' => $userId]);
        Paciente::create($request->all());
        return redirect()->route('pacientes.index')
        ->with('success', 'Paciente atualizado com sucesso.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pacientes = Paciente::findOrFail($id);
        return view('paciente.show', compact('pacientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pacientes = Paciente::findOrFail($id);
        return view('paciente.edit', compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pacientes = Paciente::findOrFail($id);
        $pacientes->update($request->all());
        return redirect()->route('pacientes.index')
        ->with('success', 'Paciente atualizado com sucesso.'); 
                           
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
