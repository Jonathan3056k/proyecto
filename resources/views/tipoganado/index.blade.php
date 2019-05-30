@extends("Inicio.lau")
@section("title","Tipos Ganados")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <div class="card">
                <div class="card-footer text-center">{{ __('Tipos de Ganado') }}</div>
            </div>
            @if(Auth::user()->id_tipousuario==2)
            <a class="btn btn-success" href="{{url("tganado/create")}}"><i class="fa fa-plus"> Agregar</i></a>
            @endif
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Tipo de Ganado</th>
                    @if(Auth::user()->id_tipousuario==2)
                    <th>Eliminar</th>
                    <th>Modificar</th>
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
                            <form action="{{route("tganado.destroy",$tganado->id_tipoganado)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("tganado",$tganado->id_tipoganado)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
