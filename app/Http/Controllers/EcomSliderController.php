<?php

namespace App\Http\Controllers;

use App\Models\EcomSlider;
use Illuminate\Http\Request;

class EcomSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=EcomSlider::all();
        return view('backend.ecomSlider.index',compact('slider'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EcomSlider  $ecomSlider
     * @return \Illuminate\Http\Response
     */
    public function show(EcomSlider $ecomSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcomSlider  $ecomSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(EcomSlider $ecomSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcomSlider  $ecomSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcomSlider $ecomSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcomSlider  $ecomSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcomSlider $ecomSlider)
    {
        //
    }
}
