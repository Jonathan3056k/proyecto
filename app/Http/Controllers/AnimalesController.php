<?php

namespace App\Http\Controllers;

use App\Animales;
use App\Dispositivos;
use App\Sexos;
use App\Tganado;
use App\User;
use Session;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.x
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $animales=Animales::all();
        return view("Animales.index",compact('animales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tganados=Tganado::all();
        $sexos=Sexos::all();
        $dispositivos=Dispositivos::all();
        $usuarios=User::all();
        return view("Animales.create",compact('dispositivos','sexos','tganados','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Animales::create($request->all());
        Session::flash('save','El animal con clave: '.$request->clave.' ha sido Guardado de forma exitosa.');
        return redirect("animales");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animales  $animales
     * @return \Illuminate\Http\Response
     */
        public
        function show(Animales $animales)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Animales $animales
         * @return \Illuminate\Http\Response
         */
        public
        function edit(Animales $animale)
        {
            $tganados=Tganado::all();
            $sexos=Sexos::all();
            $dispositivos=Dispositivos::all();
            $usuarios=User::all();
            return view("Animales.edit",compact('animale','dispositivos','sexos','tganados','usuarios'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Animales $animales
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, Animales $animale)
        {
            //
            $animale->update($request->all());
            Session::flash('update','El animal con clave: '.$animale->clave.' ha sido Actualizado de forma exitosa.');
            return redirect("animales");
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Animales $animales
         * @return \Illuminate\Http\Response
         */
        public
        function destroy($id_animal)
        {
            $animale=Animales::find($id_animal);
            $animale->delete();
            Session::flash('delete','El animal con clave: '.$animale->clave.' ha sido eliminado de forma exitosa.');
            return redirect("animales");
        }

}
