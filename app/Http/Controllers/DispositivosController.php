<?php

namespace App\Http\Controllers;

use App\Dispositivos;
use Illuminate\Http\Request;
use Session;
class DispositivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dispositivos=Dispositivos::all();
        //dd($generos);
        return view("Dispositivos.index",compact('dispositivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Dispositivos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Dispositivos::create($request->all());
        Session::flash('save','El Dispositivo: '.$request->clave_dis.' ha sido Registrado de forma exitosa.');
        return redirect("dispositivos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(Dispositivos $dispositivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispositivos $dispositivo)
    {
        //
        return view("Dispositivos.update",compact('dispositivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispositivos $dispositivo)
    {
        //
        $dispositivo->update($request->all());
        return redirect("dispositivos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_dispositivo)
    {
        //
        $dispositivo=Dispositivos::find($id_dispositivo);
        $dispositivo->delete();
        Session::flash('delete','El Dispositivo: '.$dispositivo->clave_dis.' ha sido eliminado de forma exitosa.');
        return redirect("dispositivos");
    }
}
