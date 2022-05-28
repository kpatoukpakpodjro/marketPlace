<?php

namespace App\Http\Controllers;

use App\Models\reference;
use App\Http\Requests\StorereferenceRequest;
use App\Http\Requests\UpdatereferenceRequest;

class ReferenceController extends Controller
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
     * @param  \App\Http\Requests\StorereferenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorereferenceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit(reference $reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereferenceRequest  $request
     * @param  \App\Models\reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereferenceRequest $request, reference $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(reference $reference)
    {
        //
    }
}
