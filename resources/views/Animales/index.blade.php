@extends("Inicio.lau")
@section("title","Animales")

@section("content")

    <div class="row justify-content-md-end">
        <div class="col">
            @if(Auth::user()->id_tipousuario==2)
            <a class="btn btn-success" href="{{url("animales/create")}}"><i class="fa fa-plus"></i> Registrar Nuevo</a>
            @endif
        </div>
    </div>
    <div class="row justify-content-md-end">
        <div class="col">
            @include('Animales.mensajes')
            <div class="card">
                <div class="card-footer text-center">{{ __('Ganado') }}</div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th class="table-active">No. Animal</th>
                    <th class="table-active">Ganadero</th>
                    <th class="table-active">Sexo</th>
                    <th class="table-active">Tipo de Ganado</th>
                    <th class="table-active">Dispositivo</th>
                    <th class="table-active">Clave de animal</th>
                    <th class="table-active">Peso</th>
                    <th class="table-active">Edad</th>
                    @if(Auth::user()->id_tipousuario==2)
                    <th colspan="2" class="table-active">Eliminar/Modificar</th>
                        @endif
                </tr>
                </thead>
                @foreach($animales as $animal)
                    <tr>
                        <td class="table-success">{{$animal->id_animal}}</td>
                        <th class="table-info">{{$animal->getUsuario[0]->name}}</th>
                        <th class="table-info">{{$animal->getSexos[0]->desc_sexo}}</th>
                        <th class="table-info">{{$animal->getTipoganado[0]->desc_ganado}}</th>
                        <th class="table-info">{{$animal->getDispositivo[0]->clave_dis}}</th>
                        <td class="table-info">{{$animal->clave}}</td>
                        <th class="table-info">{{$animal->peso}} kg</th>
                        <th class="table-info">{{$animal->edad}} años</th>
                        <td>
                            @if(Auth::user()->id_tipousuario==2)
                            <form action="{{route("animales.destroy",$animal->id_animal)}}" method="post" onclick=
                            "return confirm('¿Desea Eliminar Registro?')">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("animales",$animal->id_animal)}}/edit" class="btn btn-outline-success" onclick=
                            "return confirm('¿Desea Modificar Registro?')""><i class="far fa-edit"></i> </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>

            <!---->
        </div>
    </div>
    <div class="justify-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60292.77022777434!2d-100.16348866670677!3d19.182176229626894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd63813218f41f%3A0xb687c3a1fb52897c!2sValle+de+Bravo%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1557702457253!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection
