<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $datos['superheroes'] = Superheroe::paginate(10);


        return view('superheroeView.index', $datos);
        //En este método vamos a consultar la información

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('superheroeView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosSuperheroe = request() -> all();
        $datosSuperheroe = request() -> except('_token');
        //Con la instrucción anterior pedimos que se recolecten todos los valores del form

        if($request -> hasFile('foto')){
            $datosSuperheroe['foto'] = $request -> file('foto') -> store('uploads', 'public');
        }


        Superheroe::insert($datosSuperheroe);
        //return response() -> json($datosSuperheroe);
        //De esta manera se obtiene un token el cual contiene la información de nuestros envíos de formulario
        return redirect('superheroe');


    }

    /**
     * Display the specified resource.
     */
    public function show(Superheroe $superheroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $superheroe=Superheroe::findOrFail($id);
        return view('superheroeView.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSuperheroe = request() -> except('_token', '_method');

        if($request -> hasFile('foto')){
            //REcuperamos la información
            $superheroe=Superheroe::findOrFail($id);
            //Concatenamos
            Storage::delete('public/'.$superheroe->foto);
            //Borramos y actualizamos
            $datosSuperheroe['foto'] = $request -> file('foto') -> store('uploads', 'public');
        }


        Superheroe::where('id','=',$id)->update($datosSuperheroe);

        $superheroe=Superheroe::findOrFail($id);
        return view('superheroeView.edit', compact('superheroe'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Superheroe::destroy($id);
        return redirect('superheroe');
    }
}
