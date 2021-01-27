<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Archivo;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivos = Archivo::all();
        return view("archivos.index",array(
            "archivos" => $archivos
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::disk('public')->putFile('archivos',new File($request->archivo->path()));
        return Archivo::create([
            "nombre" => $request->archivo->getClientOriginalName(),
            "extension" => $request->archivo->extension(),
            "url" => $path,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        return $archivo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        return view("archivos.edit",array(
            "archivo" => $archivo
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        $path = Storage::disk('public')->putFile('archivos', new File($request->archivo->path()));
        $archivo->nombre = $request->archivo->getClientOriginalName();
        $archivo->extension = $request->archivo->extension();
        $archivo->url = $path;
        $archivo->save();
        return $archivo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        $archivo->forceDelete();
        return $archivo;
    }
}
