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
                    @if($equip->user_id == $user->id)
                        <a href="{{route('equipamento.editar',$equip->id)}}"><i class="small material-icons">edit</i></a>        
                        <a href="{{ route('equipamento.deletar',$equip->id)}}"><i class="small material-icons">delete</i></a>
                    @else
                        <a href="#"><i class="small material-icons">edit</i></a>        
                        <a href="#"><i class="small material-icons">delete</i></a>    
                    @endif    
                </td>
     {{--            <td>
                    <a href="{{ route('reservas.adicionar',$equip->id)}}"><i class="small material-icons">event_note</i></a>                    
                </td> --}}
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div style="margin-top: 50px">
    	<a href="{{ route('equipamento.adicionar')}}" class="waves-effect waves-light btn">Cadastrar Novo Equipamento</a>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
@endsection
