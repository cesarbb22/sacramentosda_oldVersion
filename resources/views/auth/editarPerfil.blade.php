@extends('layouts.masterPageAdmin')

@section('content')
    <div class="row">
        <br>
    @if(session()->has('msjMalo'))
        <div class="col l2"></div>
          <div class="col s12 m8 l8">
            <div class="card-panel red lighten-2 center-align">
              <span class="white-text">{{session('msjMalo')}}</span>
            </div>
          </div>
          <div class="col l2"></div><br><br><br><br><br>
    @endif
    
    @if(session()->has('msjBueno'))
        <div class="col l2"></div>
          <div class="col s12 m8 l8">
            <div class="card-panel green darken-3 center-align">
              <span class="white-text">{{session('msjBueno')}}</span>
            </div>
          </div>
          <div class="col l2"></div><br><br><br><br><br>
    @endif
    
         <div class="col m3 l3"></div>
          <div class="col s16 m3 l6">
        <div class="card-panel z-depth-5">
            
            <h3 class="center-align">Editar información personal</h3>
                <br>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/guardarPerfil">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->Nombre }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Primer Apellido</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="pApellido" value="{{ Auth::user()->PrimerApellido }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Segundo Apellido</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="sApellido" value="{{ Auth::user()->SegundoApellido}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="input-field">
                          <select name='parroquia' id="parroquia">
                            @foreach ($parroquias as $pa)
                              <option value="{{ $pa->IDParroquia }}">{{ $pa->NombreParroquia }}</option>
                            @endforeach
                          </select>
                          <label>Parroquia</label>
                        </div>
                    
                        <div class="input-field">
                            <select name='idPuesto' id="idPuesto" readonly>
                                <option value="{{ $puesto->IDPuesto }}">{{ $puesto->NombrePuesto }}</option>
                            </select>
                            <label>Puesto</label>
                        </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo electrónico</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="cel" class="col-md-4 control-label">Número de celular</label>

                            <div class="col-md-6">
                                <input id="cel" type="text" class="form-control" name="numCel" value="{{ Auth::user()->NumCelular }}">
                            </div>
                        </div>


                        <div class="row">
                            <br>
                            <button id="guardarActa" class="waves-effect waves-light btn right" type="submit"><i class="material-icons left">save</i>Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
 
      window.onload = function() {
        
        $(document).ready(function(){
            $('#parroquia > option[value="{{ Auth::user()->IDParroquia }}"]').attr('selected', 'selected');
            $('#puesto > option[value="{{ Auth::user()->IDPuesto }}"]').attr('selected', 'selected');
            $('#rol > option[value="{{ Auth::user()->IDRol }}"]').attr('selected', 'selected');
        });
        
         $('select').material_select();
      
      }

    </script>

@endsection
