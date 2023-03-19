Aquí vamos a crear superheroes

<!--Crear una ruta para enviar información a la url superheroe y utilizamos POST como método de store-->
<!--De esta manera utilizamos el método store para pasar la información del formulario-->
<form action="{{url('/superheroe')}}" method="post" enctype="multipart/form-data">

    @csrf

    <label>Nombre real</label>
    <input type="text" name="nombre_real" id="nombre_real">
    <br>
    <label>Nombre alias</label>
    <input type="text" name="nombre_alias" id="nombre_alias"> <!--Nombre del superheroe-->
    <br>
    <label>Información adicional</label>
    <input type="text" name="informacion_adicional" id="informacion_adicional">
    <br>
    <label>Foto</label>
    <input type="file" name="foto" id="foto">
    <br>
    <input type="submit" value="Enviar">
    <br>

</form>