@extends('layouts.app')
@section('title','Registro')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registro
                </div>
                <div class="panel-body">
                    <form action="{{ url('/register') }}" class="form-horizontal" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="name">
                                Nombre
                            </label>
                            <div class="col-md-6">
                                <input autofocus="" class="form-control" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('name') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">
                                Correo
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="password">
                                Contraseña
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" id="password" name="password" required="" type="password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="password-confirm">
                                Confirmar contraseña
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password_confirmation') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit">
                                    Registrarme
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
