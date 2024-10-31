<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Problema;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class ProblemaController extends Controller
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
    
        // Consulta de problema com filtro por paciente e pesquisa
        $problema = Problema::whereIn('paciente_id', $pacientesId)
            ->when($search, function ($query, $search) {
                return $query->whereHas('paciente', function ($query) use ($search) {
                        $query->where('nome', 'like', '%' . $search . '%');
                    })
                    ->orWhere('data_identificacao', 'like', '%' . $search . '%');
            })
            ->get();
    
        return view('problema.index', compact('problema', 'pacientesId'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        return view('problema.create',compact("pacientes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Problema::create($request->all());
        return redirect()->route('problema.index')
                                ->with('insercao','Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $problema = Problema::findOrfail($id);
        return view('problema.show', compact('problema'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $problema = Problema::findOrfail($id);
        $pacientes = Paciente::all();
        return view('problema.edit', compact('problema', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $problema = Problema::findOrfail($id);
        $problema->update($request->all());
        return redirect()->route('problema.index')
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
