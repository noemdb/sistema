<div class="thumbnail">
    {{-- <p> --}}
        {{-- <strong>Detalles del Usuario</strong> --}}
    {{-- </p> --}}

    <div class="row">

        <div class="col-sm-4" align="center">

            <img alt="{{$user->username or ''}}" class="img-thumbnail img-rounded" src="{{ (isset($profile->url_img)) ? asset($profile->url_img) : asset('images/avatar/user_default.png') }}">
        
        </div>

        <div class="col-sm-8">

            <div align="left">
                {{-- <h4></h4> --}}

                
                <ul class="list-group" style="margin: 0px;">
                    {{-- 
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">Usuario:</div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <strong>
                                    <span class="text-users-username-{{ $user->id  or ''}}">
                                        {{$user->username or ''}}
                                    </span>
                                </strong>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">Estado:</div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <strong>
                                    <span class="text-users-is_active-{{ $user->id  or ''}} text-{{ $user->is_active }}">
                                        {{$user->is_active or ''}}
                                    </span>
                                </strong>
                            </div>
                        </div>
                    </li> 
                    --}}

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">Email:</div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <strong>
                                    <span class="text-profiles-email-{{ $profile->id or '' }}">
                                        {{$profile->email or ''}}
                                    </span>
                                </strong>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">Nombre:</div>
                            <div class="col-sm-8">
                                <strong>
                                    <span class="text-profiles-firstname-{{ $profile->id or ''}}">
                                        {{$profile->firstname or ''}}
                                    </span>
                                    <span class="text-profiles-lastname-{{ $profile->id or ''}}">
                                        {{$profile->lastname or ''}}
                                    </span>
                                </strong>
                            </div>
                        </div>
                    </li>
                    
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">Creado</div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                @if(isset($profile->created_at))
                                    {{$profile->created_at->format('d-m-Y h:m:s')}}
                                @endif
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">Actualizado</div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                @if(isset($profile->updated_at))
                                    {{$profile->updated_at->format('d-m-Y h:m:s')}}
                                @endif
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">

                        <div align="center">
                            @if (isset($profile->id))
                                <a title="Actualizar" class="btn btn-warning btn-ms btn-block" href="{{ route('profiles.edit',$profile->id) }}" role="button">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    Actualizar
                                </a>
                            @else
                                <a title="Crear" class="btn btn-primary btn-ms btn-block" href="{{ route('profiles.create') }}" role="button">
                                    <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                                    Crear
                                </a>
                            @endif
                        </div>  

                    </li>                    
                </ul>
            </div>

        </div>

    </div>

</div>