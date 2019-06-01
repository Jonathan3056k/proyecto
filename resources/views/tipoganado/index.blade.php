@extends("Inicio.lau")
@section("title","Tipos Ganados")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            @if(Auth::user()->id_tipousuario==2)
            <a class="btn btn-success" href="{{url("tganado/create")}}"><i class="fa fa-plus"> Agregar</i></a>
            @endif
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">

            @include('tipoganado.mensajes')
            <div class="card">
                <div class="card-footer text-center">{{ __('Tipos de Ganado') }}</div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th class="table-active">No</th>
                    <th class="table-active">Tipo de Ganado</th>
                    @if(Auth::user()->id_tipousuario==2)
                    <th class="table-active">Eliminar</th>
                    <th class="table-active">Modificar</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($tganados as $tganado)
                    <tr>
                        <td>{{$tganado->id_tipoganado}}</td>
                        <td>{{$tganado->desc_ganado}}</td>
                        <td>
                            @if(Auth::user()->id_tipousuario==2)
                            <form action="{{route("tganado.destroy",$tganado->id_tipoganado)}}" method="post" onclick="return confirm('¿Desea Eliminar el tipo de ganado?')">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("tganado",$tganado->id_tipoganado)}}/edit" class="btn btn-outline-success" onclick=
                            "return confirm('¿Desea Modificar el tipo de ganado?')"><i class="far fa-edit"></i> </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
