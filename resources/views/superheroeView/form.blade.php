<h1>{{ $modo }} superheroe</h1>


<label>Nombre real</label>
<!--Validación de datos-->
<input type="text" value="{{ isset($superheroe->nombre_real) ? $superheroe->nombre_real : '' }}" name="nombre_real"
    id="nombre_real">
<br>
<label>Nombre alias</label>
<input type="text" value="{{ isset($superheroe->nombre_alias) ? $superheroe->nombre_alias : '' }}" name="nombre_alias"
    id="nombre_alias">
<!--Nombre del superheroe-->
<br>
<label>Información adicional</label>
<input type="text" value="{{ isset($superheroe->informacion_adicional) ? $superheroe->informacion_adicional : '' }}"
    name="informacion_adicional" id="informacion_adicional">
<br>
<label>Foto</label>

{{-- {{$superheroe->foto}} --}}
<!--Accedemos a la carpeta de almacenamiento y la ruta de la fotografía deseada-->
@if (isset($superheroe->foto))
    <img src="{{ asset('storage') . '/' . $superheroe->foto }}" width="100" alt="" srcset="">
@endif

<input type="file" value="" name="foto" id="foto">
<br>
<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('superheroe/') }}">Regresar</a>

<br>
