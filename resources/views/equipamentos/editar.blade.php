@extends('layouts.app')

@section('content')
<h3>Editar equipamento</h3>

<div class="row" style="margin-top: 50px;">
  <form action="{{route('equipamento.atualizar',$equip->id)}}" method="post" class="col s12">
  @csrf
    <input type="hidden" name="_method" value="put">
    <div class="row">
      <div class="input-field col s12">
        <input id="nome" name="name" type="text" value="{{$equip->name}}" class="validate">
        <label for="nome">Nome</label>
      </div>
    </div>  
    <div class="row">
        <div class="input-field col s12">
        <select name="equip_tipo" class="col s12">
          <option value = "" disabled selected>Selecione o tipo</option>
          @foreach($tipos as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
          @endforeach  
        </select>               
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
  </form>
</div> 
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>    
@endsection 