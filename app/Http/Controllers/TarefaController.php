<?php

namespace App\Http\Controllers;

use App\Tarefa;
use App\User;
use App\Tipo;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('listar_tarefa', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $tipos = Tipo::all();
        return view('cadastrar_tarefa', compact('users', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarefa = new tarefa();
        $tarefa->titulo = $request->input("titulo");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->status = $request->input("status");
        $tarefa->data = $request->input("data");
        $tarefa->tipo_id = $request->input("tipo");
        $tarefa->user_id = $request->input("user");
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
