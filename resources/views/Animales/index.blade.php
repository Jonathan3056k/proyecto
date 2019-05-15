@extends("Inicio.layaut")
@section("title","Animales")

@section("content")

    <div class="row justify-content-md-end">
        <div class="col">
            <a class="btn btn-success" href="{{url("animales/create")}}"><i class="fa fa-plus"></i> Registrar Nuevo</a>
        </div>
    </div>
    <div class="row justify-content-md-end">
        <div class="col-10">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>No. Animal</th>
                    <th>Ganadero</th>
                    <th>Sexo</th>
                    <th>Tipo de Ganado</th>
                    <th>Dispositivo</th>
                    <th>Clave de animal</th>
                    <th>Peso</th>
                    <th>Edad</th>
                </tr>
                </thead>
                <tbody>

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
