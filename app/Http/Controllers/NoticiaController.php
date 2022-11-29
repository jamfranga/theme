<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;

class NoticiaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $noticias=Noticia::all();

        return view('admin.noticias.index',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoticiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticiaRequest $request)
    {
        try {
            $noticia = Noticia::create($request->all());
            return redirect()->route('admin.noticias.edit',$noticia)->with('message','La noticia ha sido guardada correctamente');
            }
        catch  (\Throwable $e) {
            return redirect()->route('admin.noticias.create',$noticia)->with('error','Hubo un error a la hora de guardar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {

        return view ('admin.noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticiaRequest  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticiaRequest $request, Noticia $noticia)
    {
        try {
            $noticia->update($request->all());
            return redirect()->route('admin.noticias.edit',$noticia)->with('message','La noticia ha sido guardada correctamente');
        }
        catch  (\Throwable $e) {
            return redirect()->route('admin.noticias.edit',$noticia)->with('error','Hubo un error a la hora de guardar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
