<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terapia;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class TerapiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = Auth::id();
        $paciente = Paciente::where('user_id', $userId)->get();
        $pacientesId = $paciente->pluck("id");
    
        // Obter o termo de pesquisa
        $search = $request->input('search');
    
        // Consulta de terapia com filtro por paciente e pesquisa
        $terapia = Terapia::whereIn('paciente_id', $pacientesId)
            ->when($search, function ($query, $search) {
                return $query->whereHas('paciente', function ($query) use ($search) {
                        $query->where('nome', 'like', '%' . $search . '%');
                    })
                    ->orWhere('data', 'like', '%' . $search . '%')
                    ->orWhere('tecnica', 'like', '%' . $search . '%');
            })
            ->get();
    
        return view('terapia.index', compact('terapia', 'pacientesId'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        return view('terapia.create',compact("pacientes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Terapia::create($request->all());
        return redirect()->route('terapia.index')
                                ->with('insercao','Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $terapia = Terapia::findOrfail($id);
        return view('terapia.show', compact('terapia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $terapia = Terapia::findOrfail($id);
        $pacientes = Paciente::all();
        return view('terapia.edit', compact('terapia', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $terapia = Terapia::findOrfail($id);
        $terapia->update($request->all());
        return redirect()->route('terapia.index')
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
