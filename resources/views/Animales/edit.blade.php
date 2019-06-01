@extends("Inicio.lau")
@section("title","Animales")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("animales")}}"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("animales.update",$animale->id_animal)}}" method="post">
                <div class="card">
                    <div class="card-header text-center">{{ __('Actualizar datos de animales') }}</div>
                </div>
                @csrf
                @method("PUT")
                <div class="form-group row">
                    <label for="id_user" class="col-md-4 col-form-label text-md-right">Usuario</label>
                    <select name="id_user" id="id_user" class="col-md-3">
                        @foreach($usuarios as $usuario)
                            <option value="{{$usuario->id_user}}" {{$animale->id_user==$usuario->id_user?"selected":""}}>{{$usuario->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <label for="id_sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>
                    <select name="id_sexo" id="id_sexo" class="col-md-3">
                        @foreach($sexos as $sexo)
                            <option value="{{$sexo->id_sexo}}" {{$animale->id_sexo==$sexo->id_sexo?"selected":""}}>{{$sexo->desc_sexo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <label for="id_tipoganado" class="col-md-4 col-form-label text-md-right">tipo de ganado</label>
                    <select name="id_tipoganado" id="id_tipoganado" class="col-md-3">
                        @foreach($tganados as $tganado)
                            <option value="{{$tganado->id_tipoganado}}" {{$animale->id_tipoganado==$tganado->id_tipoganado?"selected":""}}>{{$tganado->desc_ganado}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <label for="titulo" class="col-md-4 col-form-label text-md-right">Dispositivo</label>
                    <select name="id_dispositivo" id="id_dispositivo" class="col-md-3">
                        @foreach($dispositivos as $dispositivo)
                            <option value="{{$dispositivo->id_dispositivo}}" {{$animale->id_dispositivo==$dispositivo->id_dispositivo?"selected":""}}>{{$dispositivo->clave_dis}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <label for="clave" class="col-md-4 col-form-label text-md-right">Clave de animal</label>
                    <input type="text" id="clave" name="clave" class="col-md-4"  placeholder="Ingresa una clave para el animal" class="form-control">
                </div>


                <div class="form-group row">
                    <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>
                    <input type="text"  value="{{$animale->peso}}"id="peso" name="peso" class="col-md-3"  placeholder="peso" class="form-control">
                </div>

                <div class="form-group row">
                    <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>
                    <input type="date" value="{{$animale->edad}}" id="edad" name="edad" class="col-md-3"  placeholder="edad" class="form-text">
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
