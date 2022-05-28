<?php

namespace App\Http\Controllers;

use App\Models\marchand;
use App\Http\Requests\StoremarchandRequest;
use App\Http\Requests\UpdatemarchandRequest;

class MarchandController extends Controller
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
     * @param  \App\Http\Requests\StoremarchandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremarchandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\marchand  $marchand
     * @return \Illuminate\Http\Response
     */
    public function show(marchand $marchand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marchand  $marchand
     * @return \Illuminate\Http\Response
     */
    public function edit(marchand $marchand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemarchandRequest  $request
     * @param  \App\Models\marchand  $marchand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemarchandRequest $request, marchand $marchand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marchand  $marchand
     * @return \Illuminate\Http\Response
     */
    public function destroy(marchand $marchand)
    {
        //
    }
}
