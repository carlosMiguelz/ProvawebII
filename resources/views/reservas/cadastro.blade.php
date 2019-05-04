@extends('layouts.app')

@section('content')
    <h3>Realizar Reserva</h3>
    
    <div class="row" style="margin-top: 50px;">
        <form class="col s12" action="{{route('reservas.salvar')}}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <select id="equipamento_id" name="equipamento_id" class="col s6">
                      <option value = "" disabled selected>Selecione o equipamento</option>
                      @foreach($equips as $equip)
                        <option value="{{ $equip->id }}">{{ $equip->name }}</option>
                      @endforeach  
                    </select>  
                    
                </div>
                <div class="input-field col s6">
                    <input id="nome" type="text" class="validate" value="{{ $user->name}}" disabled>
                    <label for="nome">Nome do reservante</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" class="datepickerini" id="inidata" name="inicio_data">
                    <label for="inidata">Data de Início</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" class="timepicker" id="horaini" name="inicio_horario">
                    <label for="horaini">Horario de Início</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" class="datepickerfim" id="fimdata" name="fim_data">
                    <label for="fimdata">Data do Término</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" class="timepicker" id="horafim" name="fim_horario">
                    <label for="horafim">Horario do Término</label>
                </div>
            </div>

            @if(session('errordata'))
                <script>
                    alert('Datas invalidas')
                </script>
            @endif    
            <button class="btn waves-effect waves-light" type="submit" name="action">Reservar</button>
        </form>
    </div>    

@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/dateconfig.js"></script>
    <script>
    $(document).ready(function(){
            $('select').formSelect();
        });
    </script>    
@endsection    