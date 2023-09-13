<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TarefasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Tarefas $tarefas)
    {
        $this->tarefas = $tarefas;
    }

    public function index($id)
    {
        try{
            $tarefa = $this->tarefas->findOrFail($id);
            return response()->json($tarefas);
        }catch(\Exception $th){
            Log::error(['th' => $th]);
            return response()->json(['message' => 'Tarefa not found :(']);

        }
    }

    public function list(Request $request)
    {
        $tarefas = $this->tarefas->paginate($request->per_page ?? 15);
        return response()->json($tarefas, 200);
    }

    public function store(Request $request){
        $this->validate($request, [
            'titulo' => 'required|string',
            'descricao' => 'string',
            'data_vencimento' => 'required',
            'status' => 'string'
        ]);

        $tarefas = $this->tarefas->create([
            'titulo' => $request->input('titulo'),
            'descricao' =>$request->input('descricao'),
            'data_vencimento' => $request->input('data_vencimento'),
            'status' => $request->input('status'),
        ]);

        return response()->json(['message' => 'Tarefas created!', 'tarefas' => $tarefas]);
    }

    public function update(Request $request, $id){

        try{
            $tarefas = $this->tarefas->findOrFail($id);
            $tarefas->fill($request->all())->update();
            return response()->json(['message' => 'Tarefas updated!', 'tarefas' => $tarefas]);
        }catch(\Exception $th){
            Log::error(['th' => $th]);
            return response()->json(['message' => 'Error to update tarefas :(']);

        }
    }

    public function delete($id){

        try{
            $this->tarefas->findOrFail($id)->delete();
            return response()->json(['message' => 'Tarefas deleted']);
        }catch(\Exception $th){
            Log::error(['th' => $th]);
            return response()->json(['message' => 'Error to delete tarefas :(']);

        }
    }

    protected $tarefas;
}