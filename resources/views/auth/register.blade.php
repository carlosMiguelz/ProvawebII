@extends('layouts.app')

@section('content')
    
    <div class="row">

        <div class="container">
            <h3>Registro</h3>
                <div style="margin-top: 50px;">
                <form class="" action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-field">
                         <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label>Nome:</label>
                    </div>

                    <div class="input-field">
                        <input id="email" type="email"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label>Email:</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="input-field">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>Senha:</label>
                    </div>   

                    <div class="input-field">
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                        <label>{{ __('Confirme a senha') }}</label>
                    </div>       

                    <button class="btn teal">{{ __('Registre-se') }}</button> 
                </form>
                </div>
        </div>    
    </div>

@endsection
