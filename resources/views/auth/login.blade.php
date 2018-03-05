@extends ('layouts.app_login')
@section ('content')

    <div class="row">

      <div class="col-md-6 offset-md-3">

            <div class="container">

                @component('elements.widgets.panel')
                    @slot ('panelTitle', 'Datos de Acceso')
                    @slot ('class','info')
                    @slot ('panelBody')
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <div class="col-md-12">

                                            <label for="username" class="control-label">Nombre de Usuario</label>

                                            <div class="input-group">
                                              <span class="input-group-addon"><i class="fas fa-user"></i>&nbsp;</span>
                                              <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" aria-describedby="basic-addon1" value="{{ old('username') }}" required>
                                            </div>

                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                            
                                        </div>

                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    
                                        <div class="col-md-12">
                                            <label for="password" class="control-label">Contraseña</label>
                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-key"></i>&nbsp;</span>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="password" aria-describedby="basic-addon1" required>
                                            </div>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <div class="checkbox" align="right">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                                </label>
                                            </div>
                                            @component('elements.widgets.button')
                                                @slot('type','submit')
                                                @slot('value','Ingresar')
                                                @slot('class','info btn-block')
                                            @endcomponent
                                            
                                            <br>
                                            <a class="btn-link" href="{{ route('password.request') }}">
                                                Olvidaste tu Contraseña?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endslot
                @endcomponent

            </div>

        </div>

    </div>

@endsection
