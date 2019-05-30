@extends("Inicio.lau")
@section("title","Dispositivos")
@section("content")
    <div class="row justify-content-md-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-footer text-center">{{ __('Dispositivos Adquiridos') }}</div>
                </div>
                @if(Auth::user()->id_tipousuario==2)
                <a class="btn btn-success" href="{{url("dispositivos/create")}}"><i class="fa fa-plus" > Dispositivo</i></a>
                @endif
            </div>
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Dispositivo</th>
                    @if(Auth::user()->id_tipousuario==2)
                    <th >Eliminar</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($dispositivos as $dispositivo)
                    <tr>
                        <td>{{$dispositivo->id_dispositivo}}</td>
                        <td>{{$dispositivo->clave_dis}}</td>
                        @if(Auth::user()->id_tipousuario==2)
                        <td>
                            <form action="{{route("dispositivos.destroy",$dispositivo->id_dispositivo)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
