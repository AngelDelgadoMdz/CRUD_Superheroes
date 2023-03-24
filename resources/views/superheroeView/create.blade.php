{{-- Aquí vamos a crear superheroes --}}
@extends('layouts.app')

@section('content')
    <div class="container">


        <!--Crear una ruta para enviar información a la url superheroe y utilizamos POST como método de store-->
        <!--De esta manera utilizamos el método store para pasar la información del formulario-->
        <form action="{{ url('/superheroe') }}" method="post" enctype="multipart/form-data">

            @csrf
            @include('superheroeView.form', ['modo' => 'Crear'])


        </form>
    </div>
@endsection
