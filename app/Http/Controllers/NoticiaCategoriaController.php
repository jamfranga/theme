<?php

namespace App\Http\Controllers;

use App\Models\NoticiaCategoria;
use App\Http\Requests\StoreNoticiaCategoriaRequest;
use App\Http\Requests\UpdateNoticiaCategoriaRequest;

class NoticiaCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoticiaCategoriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticiaCategoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoticiaCategoria  $noticiaCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(NoticiaCategoria $noticiaCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoticiaCategoria  $noticiaCategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(NoticiaCategoria $noticiaCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticiaCategoriaRequest  $request
     * @param  \App\Models\NoticiaCategoria  $noticiaCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticiaCategoriaRequest $request, NoticiaCategoria $noticiaCategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoticiaCategoria  $noticiaCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoticiaCategoria $noticiaCategoria)
    {
        //
    }
}
