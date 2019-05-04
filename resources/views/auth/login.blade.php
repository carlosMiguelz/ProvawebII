@extends('layouts.app')

@section('content')
    
    <div class="row">

        <div class="container">
            <h3>Login</h3>
                <div style="margin-top: 50px;">
                <form class="" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
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

                    <button class="btn teal">{{ __('Login') }}</button> 
                </form>
                <br>
                <span>Não tem cadastro ? <a href="{{ route('register')}}">Cadastre-se!</a></span>
                </div>
        </div>    
    </div>

@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
@endsection