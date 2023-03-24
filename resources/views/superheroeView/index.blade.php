{{-- Mostrar la lista de los Superheroes --}}


@extends('layouts.app')

@section('content')
    <style>
        body {
            animation: change-background 8s ease-in-out infinite alternate;
            background-size: cover;
        }

        .transparencia {
            background-color: rgba(255, 255, 255, 0.5);
            opacity: 0.5;
            height: 50px;
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 2;
        }

        @keyframes change-background {
            0% {
                background-image: url("https://www.mkgifs.com/wp-content/uploads/2022/04/Marvel-GIF-4k-Wallpaper-min.gif");
            }

            33% {
                background-image: url("https://media.tenor.com/rFcgwuez8c0AAAAd/flash.gif");
            }

            66% {
                background-image: url("https://www.mkgifs.com/wp-content/uploads/2022/04/Avengers-Thor-GIF-min.gif");
            }

            100% {
                background-image: url("https://www.mkgifs.com/wp-content/uploads/2022/12/Superman-gif-wallpaper-min.gif");
            }


        }
    </style>

    
    <div class="container pb-5">

        @if (Session::has('mensaje'))
            {{ Session::get('mensaje') }}
        @endif



        <a href="{{ url('superheroe/create') }}" class="btn btn-success m-3">Registrar nuevo Superheroe</a>

        <table class="table table-light table-bordered table-hover">

            <thead class="thead-light">
                <!--Columnas o cabeceras-->
                <tr>
                    <th>#</th>
                    <!--ID-->
                    <th>Foto</th>
                    <th>Nombre real</th>
                    <th>Nombre alias</th>
                    <th>Información adicional</th>

                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <!--Filas-->
                @foreach ($superheroes as $superheroe)
                    <tr>
                        <td>{{ $superheroe->id }}</td>
                        <td>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $superheroe->foto }}"
                                width="100" alt="" srcset="">
                            {{ $superheroe->foto }}

                        </td>
                        <td>{{ $superheroe->nombre_real }}</td>
                        <td>{{ $superheroe->nombre_alias }}</td>
                        <td>{{ $superheroe->informacion_adicional }}</td>

                        <td>


                            <a href="{{ url('/superheroe/' . $superheroe->id . '/edit') }}" class="btn btn-primary">
                                Editar
                            </a>

                            <form action="{{ url('/superheroe/' . $superheroe->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Deseas borrar?')" class="btn btn-danger"
                                    value="Borrar">

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
