@extends('layouts.app')

@section('content')
<h3>Cadastro de Equipamentos</h3>

<div class="row" style="margin-top: 50px;">
  <form action="{{route('equipamento.salvar')}}" method="post" class="col s12">
  @csrf
    <div class="row">
      <div class="input-field col s12">
        <input id="nome" name="name" type="text" class="validate">
        <label for="nome">Nome</label>
      </div>
    </div>  
    <div class="row">
      <!-- <label>Materialize Select</label> -->
        <select name="equip_tipo" class="col s12">
          <option value = "" disabled selected>Selecione o tipo</option>
          @foreach($tipos as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
          @endforeach  
        </select>               
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
  </form>
</div>      

  @endsection
