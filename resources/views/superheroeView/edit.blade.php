{{-- => es el símbolo de igual --}}
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

    <div class="container bg-color py-3">

        <form action="{{ url('/superheroe/' . $superheroe->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            {{ method_field('PATCH') }}
            @include('superheroeView.form', ['modo' => 'Editar']);

        </form>
    </div>
@endsection
