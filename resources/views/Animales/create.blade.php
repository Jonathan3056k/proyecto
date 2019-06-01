@extends("Inicio.lau")
@section("title","Animales")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("animales")}}"><i class="fa fa-backspace">Regresar</i></a>
        </div>
    </div>
<div class="row justify-content-md-center">
    <div class="col-8">
        <form action="{{url("animales")}}" method="post">
            <div class="card">
                <div class="card-header text-center">{{ __('Registrar Animales') }}</div>
            </div>
            @csrf

            <div class="form-group row">
                <label for="Ganadero" class="col-md-4 col-form-label text-md-right">Usuario</label>
                <select name="id_user" id="id_user">
                    @foreach($usuarios as $usuario)
                        <option class="col-md-6" value="{{$usuario->id_user}}" >{{$usuario->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>
                <select name="id_sexo" id="id_sexo" class="col-md-3">
                    @foreach($sexos as $sexo)
                        <option value="{{$sexo->id_sexo}}" >{{$sexo->desc_sexo}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="titulo" class="col-md-4 col-form-label text-md-right">Tipo de Ganado</label>
                <select name="id_tipoganado" id="id_tipoganado" class="col-md-3">
                    @foreach($tganados as $ganado)
                        <option value="{{$ganado->id_tipoganado}}" >{{$ganado->desc_ganado}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="titulo" class="col-md-4 col-form-label text-md-right">Dispositivo</label>
                <select name="id_dispositivo" id="id_dispositivo" class="col-md-3">
                    @foreach($dispositivos as $dispositivo)
                        <option value="{{$dispositivo->id_dispositivo}}" >{{$dispositivo->clave_dis}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="clave" class="col-md-4 col-form-label text-md-right">Clave de animal</label>
                <input class="col-md-6" type="text" id="clave" name="clave" class="form-control"  placeholder="Ingresa una clave para el animal">
            </div>

            <div class="form-group row">
                <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>
                <input class="col-md-6" type="text" id="peso" name="peso" class="form-control"  placeholder="Ingresa peso de animal">
            </div>

            <div class="form-group row">
                <label for="edad" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento</label>
                <input class="col-md-6" type="date" id="edad" name="edad" class="form-text"  placeholder="">
            </div>
            <button type="submit" class="btn btn-group-sm col-xl-12"><i class="fa fa-save "> Guardar</i></button>
        </form>
    </div>
</div>
@endsection
