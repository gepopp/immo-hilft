<?php

namespace App\Http\Controllers;

use App\Models\subscriber;
use App\Http\Requests\StoresubscriberRequest;
use App\Http\Requests\UpdatesubscriberRequest;

class SubscriberController extends Controller
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
     * @param  \App\Http\Requests\StoresubscriberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubscriberRequest  $request
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubscriberRequest $request, subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscriber $subscriber)
    {
        //
    }
}
