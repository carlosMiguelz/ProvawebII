@extends('layouts.app')

@section('content')
    <div>
        <h3>Equipamentos Cadastrados</h3>
    </div>
    <div>
        <table>
        <thead>
          <tr>
              <th>Nome</th>
              <th>Tipo</th>              
          </tr>
        </thead>

        <tbody>
        @foreach($equipamentos as $equip)
            <tr>
                <td>{{ $equip->name }}</td>
                @foreach($tipos as $tipo)
                	@if($tipo->id == $equip->equip_tipo)
                		<td>{{ $tipo->name }}</td>
                		@break
                	@endif
                @endforeach		
                <td></td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div style="margin-top: 50px">
    	<a href="{{ route('equipamento.adicionar')}}" class="waves-effect waves-light btn">Cadastrar Novo Equipamento</a>
    </div>
@endsection
