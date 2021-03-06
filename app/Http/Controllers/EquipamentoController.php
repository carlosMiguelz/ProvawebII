<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipamento;
use App\Tipo;
use Auth;

class EquipamentoController extends Controller
{   

    public function __construct(){
        $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::all();
        $tipos = Tipo::all();
        $user = Auth::user();

        return view('equipamentos.index',compact('equipamentos','tipos','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        return view('equipamentos.cadastro', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $equip = new Equipamento;
        $equip->name = $request->name;
        $equip->equip_tipo = $request->equip_tipo;
        $equip->user_id = Auth::user()->id;
        $equip->save();

        return redirect()->route('equipamento.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equip = Equipamento::find($id);
        $tipos = Tipo::all();
        return view('equipamentos.editar',compact('equip','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro = $request->except(['_token','_method']);
        $equip = Equipamento::find($id);
        $equip->update($registro);
        return redirect()->route('equipamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipamento = Equipamento::find($id);
        $equipamento->delete();
        return redirect()->route('equipamento.index');
    }
}