@extends ('layouts.app_login')

@section ('content')

    {{-- <div class="container"> --}}

        <div class="row">

            <div class="col-md-8 offset-md-2">
                
                @component('elements.widgets.panel')
                    @slot ('panelTitle', 'Datos de Acceso')
                    @slot ('class','info')
                    @slot ('panelBody')

                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <label for="username" class="control-label">Nombre de Usuario</label>

                                <div class="form-label-group">
                                  {{-- <span class="input-group-addon"><i class="fas fa-user"></i>&nbsp;</span> --}}
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" aria-describedby="basic-addon1" value="{{ old('username') }}" required>
                                </div>

                                @if ($errors->has('username'))

                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>

                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                                <label for="password" class="control-label">Contraseña</label>
                                
                                <div class="form-label-group">
                                    {{-- <span class="input-group-addon"><i class="fas fa-key"></i>&nbsp;</span> --}}
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" aria-describedby="basic-addon1" required>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                            </div>

                            <div class="form-group">
                                
                                <div class="checkbox" align="right">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>

                                @component('elements.widgets.button')
                                    @slot('type','submit')
                                    @slot('value','Ingresar')
                                    @slot('class','primary btn-block')
                                @endcomponent
                                
                                <br>
                                <a class="btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu Contraseña?
                                </a>
                                
                            </div>

                        </form>

                    @endslot

                @endcomponent


            </div>

        </div>

    {{-- </div> --}}

@endsection
