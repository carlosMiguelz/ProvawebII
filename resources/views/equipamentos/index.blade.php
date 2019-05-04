@extends('layouts.app')

@section('content')
    <div>
        <h3>Equipamentos Cadastrados</h3>
    </div>
    <div>
        <table class="striped">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Tipo</th>              
              <th>Ações</th>              
              <th>Reservar</th>              
          </tr>
        </thead>

        <tbody>
        @foreach($equipamentos as $equip)
            <tr>
                <td class="col s4">{{ $equip->name }}</td>
                @foreach($tipos as $tipo)
                	@if($tipo->id == $equip->equip_tipo)
                		<td class="col s4">{{ $tipo->name }}</td>
                		@break
                	@endif
                @endforeach		

                <td class="col s4 centered">
                    <a href="#"><i class="small material-icons">edit</i></a>        
                    <a href="{{ route('equipamento.deletar',$equip->id)}}"><i class="small material-icons">delete</i></a>
                </td>
                <td>
                    <a href="#"><i class="small material-icons">event_note</i></a>                    
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div style="margin-top: 50px">
    	<a href="{{ route('equipamento.adicionar')}}" class="waves-effect waves-light btn">Cadastrar Novo Equipamento</a>
    </div>
@endsection
