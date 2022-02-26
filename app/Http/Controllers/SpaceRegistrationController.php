<?php

namespace App\Http\Controllers;

use App\Models\SpaceRegistration;
use App\Http\Requests\StoreSpaceRegistrationRequest;
use App\Http\Requests\UpdateSpaceRegistrationRequest;

class SpaceRegistrationController extends Controller
{
    public function verify($id, $hash){

        $space = SpaceRegistration::find($id);

        if(!$space || sha1($space->email) !== $hash){

           abort(401);

        }


        $space->markEmailAsVerified();

        session()->flash('message', __('Thank you, your space was submitted successfully.'));
        return view('space-verified');


    }



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
     * @param  \App\Http\Requests\StoreSpaceRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpaceRegistrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpaceRegistration  $spaceRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(SpaceRegistration $spaceRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpaceRegistration  $spaceRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(SpaceRegistration $spaceRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpaceRegistrationRequest  $request
     * @param  \App\Models\SpaceRegistration  $spaceRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpaceRegistrationRequest $request, SpaceRegistration $spaceRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpaceRegistration  $spaceRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpaceRegistration $spaceRegistration)
    {
        //
    }
}
