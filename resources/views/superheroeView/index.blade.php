Mostrar la lista de los Superheroes

<table class="table table-light">

    <thead class="thead-light"> <!--Columnas o cabeceras-->
        <tr>
            <th>#</th> <!--ID-->
            <th>Foto</th>
            <th>Nombre real</th>
            <th>Nombre alias</th>
            <th>Información adicional</th>
            
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody> <!--Filas-->
        @foreach ($superheroes as $superheroe)
        <tr>
            <td>{{$superheroe -> id}}</td>
            <td>{{$superheroe -> foto}}</td>
            <td>{{$superheroe -> nombre_real}}</td>
            <td>{{$superheroe -> nombre_alias}}</td>
            <td>{{$superheroe -> informacion_adicional}}</td>
            
            <td>Editar | 
            
                <form action="{{url('/superheroe/'.$superheroe->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>