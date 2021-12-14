<?php

namespace App\Http\Controllers;

use App\Models\Duree;
use App\Http\Requests\StoreDureeRequest;
use App\Http\Requests\UpdateDureeRequest;

class DureeController extends Controller
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
     * @param  \App\Http\Requests\StoreDureeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDureeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function show(Duree $duree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function edit(Duree $duree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDureeRequest  $request
     * @param  \App\Models\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDureeRequest $request, Duree $duree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duree $duree)
    {
        //
    }
}
