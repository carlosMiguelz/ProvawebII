@extends('layouts.app')

@section('content')
    

    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
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
                <td></td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
@endsection
