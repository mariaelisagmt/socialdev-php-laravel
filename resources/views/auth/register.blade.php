@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="usr_codigo" class="col-md-4 col-form-label text-md-right">{{ __('Codigo:') }}</label>

                            <div class="col-md-6">
                                <input id="usr_codigo" type="text" class="form-control @error('usr_codigo') is-invalid @enderror" name="usr_codigo" value="{{ old('usr_codigo') }}" required autocomplete="usr_codigo" autofocus>

                                @error('usr_codigo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                            <div class="col-md-6">
                                <input id="usr_nome" type="text" class="form-control @error('usr_nome') is-invalid @enderror" name="usr_nome" value="{{ old('usr_nome') }}" required autocomplete="usr_nome" autofocus>

                                @error('usr_nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                            <div class="col-md-6">
                                <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" required autocomplete="usr_email">

                                @error('usr_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone:') }}</label>

                            <div class="col-md-6">
                                <input id="usr_telefone" type="text" class="form-control @error('usr_telefone') is-invalid @enderror" name="usr_telefone" value="{{ old('usr_telefone') }}" required autocomplete="usr_telefone" autofocus>

                                @error('usr_telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_senha" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>

                            <div class="col-md-6">
                                <input id="usr_senha" type="password" class="form-control @error('usr_senha') is-invalid @enderror" name="usr_senha" required autocomplete="new-password">

                                @error('usr_senha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmação de Senha:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
