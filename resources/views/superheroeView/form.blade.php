

<div class="container-fluid mx-auto w-75">
<h1>{{ $modo }} superheroe</h1>

<div class="form-group my-4">

<label>Nombre real</label>
<!--Validación de datos-->
<input class="form-control" type="text" value="{{ isset($superheroe->nombre_real) ? $superheroe->nombre_real : '' }}" name="nombre_real"
    id="nombre_real">


</div>

<div class="form-group my-4">
<label>Nombre alias</label>
<input class="form-control" type="text" value="{{ isset($superheroe->nombre_alias) ? $superheroe->nombre_alias : '' }}" name="nombre_alias"
    id="nombre_alias">
<!--Nombre del superheroe-->

</div>

<div class="form-group my-4">
<label>Información adicional</label>
<input class="form-control" type="text" value="{{ isset($superheroe->informacion_adicional) ? $superheroe->informacion_adicional : '' }}"
    name="informacion_adicional" id="informacion_adicional">
</div>

<div class="form-group my-4">
{{-- <label>Foto</label> --}}


{{-- {{$superheroe->foto}} --}}
<!--Accedemos a la carpeta de almacenamiento y la ruta de la fotografía deseada-->
@if (isset($superheroe->foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $superheroe->foto }}" width="100" alt="" srcset="">
@endif

<input class="form-control my-3" type="file" value="" name="foto" id="foto">

</div>


<input class="btn btn-success my-4" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary my-4 px-3" href="{{ url('superheroe/') }}">Regresar</a>

</div>
