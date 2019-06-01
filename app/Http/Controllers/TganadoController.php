<?php

namespace App\Http\Controllers;

use App\Tganado;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class TganadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tganados=Tganado::all();
        //dd($generos);
        return view("tipoganado.index",compact('tganados'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("tipoganado.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Tganado::create($request->all());
        Session::flash('save','El tipo de ganado: '.$request->desc_ganado.' ha sido Guardado de forma exitosa.');
        return redirect("tganado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tganado  $tganado
     * @return \Illuminate\Http\Response
     */
    public function show(Tganado $tganado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tganado  $tganado
     * @return \Illuminate\Http\Response
     */
    public function edit(Tganado $tganado)
    {
        //
        return view("tipoganado.update",compact('tganado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tganado  $tganado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tganado $tganado)
    {
        //
        $tganado->update($request->all());
        Session::flash('update','El tipo de ganado: '.$tganado->desc_ganado.' ha sido actualizado de forma exitosa.');
        return redirect("tganado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tganado  $tganado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tipoganado)
    {
        //
        $Tganado=Tganado::find($id_tipoganado);
        $Tganado->delete();
        Session::flash('delete','El tipo de ganado: '.$Tganado->desc_ganado.' ha sido eliminado de forma exitosa.');
        return redirect("tganado");
    }

}
