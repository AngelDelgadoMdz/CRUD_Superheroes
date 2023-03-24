{{-- Mostrar la lista de los Superheroes --}}


@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::has('mensaje'))
            {{ Session::get('mensaje') }}
        @endif



        <a href="{{ url('superheroe/create') }}">Registrar nuevo Superheroe</a>

        <table class="table table-light">

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
                            <img src="{{ asset('storage') . '/' . $superheroe->foto }}" width="100" alt=""
                                srcset="">
                            {{ $superheroe->foto }}

                        </td>
                        <td>{{ $superheroe->nombre_real }}</td>
                        <td>{{ $superheroe->nombre_alias }}</td>
                        <td>{{ $superheroe->informacion_adicional }}</td>

                        <td>


                            <a href="{{ url('/superheroe/' . $superheroe->id . '/edit') }}">
                                Editar
                            </a>
                            |

                            <form action="{{ url('/superheroe/' . $superheroe->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
