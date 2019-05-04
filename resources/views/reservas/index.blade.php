@extends('layouts.app')

@section('content')
    <h3>Minhas Reservas</h3>

    <div>
        <table class="striped">
        <thead>
          <tr>
              <th>Equipamento</th>
              <th>Data de início</th>              
              <th>Horário de início</th>              
              <th>Data de término</th>              
              <th>Horário de término</th>              
          </tr>
        </thead>

        <tbody>
        @foreach($reservas as $reserva)
            <tr>
                @foreach($equipamentos as $equip)
                    @if($equip->id == $reserva->equipamento_id)
                        <td>{{ $equip->name }}</td>
                        @break
                    @endif    
                @endforeach

                <td>{{ $reserva->inicio_data }}</td>
                <td>{{ $reserva->inicio_horario }}</td>
                <td>{{ $reserva->fim_data }}</td>
                <td>{{ $reserva->fim_horario }}</td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div style="margin-top: 80px;">
      <a href="{{ route('reservas.adicionar')}}" class="btn">Nova reserva</a>
    </div>
@endsection