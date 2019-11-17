<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Formulario;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroFormulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([ 
            'nombre'=>'required',
            'apellidop'=>'required',
            'apellidom'=>'required',
            'edad'=>'required|numeric|max:100'
          
        ],[
            'nombre.required'=>'Debes ingresar tu nombre compadre',
            // 'fechalanza.required'=>'Debes ingresar fecha de lanzamiento',
            // 'sinopsis.required'=>'Debes ingresar una sinopsis de la película',
            // 'duracion.numeric'=>'La duración debe ser en minutos',
            // 'duracion.required'=>'Debes ingresar la duración',
            // 'duracion.max'=>'La película debe durar más de 300min',
            // 'pais_id.required'=>'Debes seleccionar un país',
            // 'genero_id.required'=>'Debes seleccionar un genero',
            // 'clasificacion_id.required'=>'Debes seleccionar una clasificación',
            // 'Imagen.image'=>'solo puedes agragar imagenes ,jpg, .png, etc',
            // 'Imagen.required'=>'Debes seleccionar una imagen',
        ]);


    
        $formu = new Formulario();
        $formu->nombre=$request->input('nombre');
        $formu->apellidop=$request->input('apellidop');
        $formu->apellidom=$request->input('apellidom');
        $formu->fichadeposito=$request->input('fichadeposito');
        $formu->correo=$request->input('correo');
        $formu->municipio=$request->input('municipio');
        $formu->escuela=$request->input('escuela');
        $formu->tipoescuela=$request->input('tipoescuela');
        $formu->edad=$request->input('edad');
        $formu->sexo=$request->input('sexo');
        $formu->curso=$request->input('curso');
        $formu->nivelingles=$request->input('nivelingles');
        $formu->vocacion=$request->input('vocacion');
        $formu->premio=$request->input('premio');
        $formu->tipopremio=$request->input('tipopremio');
        $formu->seguirvocacion=$request->input('seguirvocacion');
        $formu->profesion=$request->input('profesion');
        $formu->quiensoy=$request->input('quiensoy');
        $formu->deseosnecesidades=$request->input('deseosnecesidades');
        $formu->intereses=$request->input('intereses');
        $formu->fortalezas=$request->input('fortalezas');
        $formu->areastalento=$request->input('areastalento');
        $formu->valores=$request->input('valores');
        $formu->metascp=$request->input('metascp');
        $formu->metasmp=$request->input('metasmp');
        $formu->metaslp=$request->input('metaslp');
        $formu->pendiente=$request->input('pendiente');
        $formu->aspectosmejorar=$request->input('aspectosmejorar');
        $formu->accionesmejorar=$request->input('accionesmejorar');
        $formu->valoresconsolidar=$request->input('valoresconsolidar');
        $formu->save();

        return Redirect::back()
        ->with('status', 'Formulario registrado correctamente, gracias por tu participación.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}