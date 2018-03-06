@extends ('layouts.app_login')

@section ('content')

    {{-- <div class="container"> --}}

        <div class="row">

            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xg-2 offset-xg-5">
                
                @component('elements.widgets.panel')
                    @slot ('panelTitle', 'Datos de Acceso')
                    @slot ('class','info')
                    @slot ('panelBody')

                        <form class="form-signin" method="POST" action="{{ route('login') }}">

                            {{ csrf_field() }}


                            <div class="input-group{{ $errors->has('username') ? ' has-danger' : '' }}">

                                <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div>

                                <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Nombre de Usuario" aria-describedby="basic-addon1" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))

                                    <div class="invalid-feedback" style="width: 100%;">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    </div>

                                @endif
                                
                            </div>
                            <br>
                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                  </span>
                                </div>

                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" aria-describedby="basic-addon1" required>

                                @if ($errors->has('password'))

                                    <div class="invalid-feedback" style="width: 100%;">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    </div>

                                @endif
                                
                            </div>

                            <br>

                            {{-- <div class="form-group"> --}}
                                
                                <div class="checkbox mb-3" align="right">
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
                                
                            {{-- </div> --}}

                        </form>

                    @endslot

                @endcomponent


            </div>

        </div>

    {{-- </div> --}}

@endsection
