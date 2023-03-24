{{-- Aquí vamos a crear superheroes --}}
@extends('layouts.app')

@section('content')
    <style>
        .bg-color {
            background-color: white;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
    <div class="container bg-color">


        <!--Crear una ruta para enviar información a la url superheroe y utilizamos POST como método de store-->
        <!--De esta manera utilizamos el método store para pasar la información del formulario-->
        <form action="{{ url('/superheroe') }}" method="post" enctype="multipart/form-data">

            @csrf
            @include('superheroeView.form', ['modo' => 'Crear'])


        </form>
    </div>
@endsection
