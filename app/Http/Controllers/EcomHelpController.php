<?php

namespace App\Http\Controllers;


use App\Models\Ecom_help;
use Exception;
use Illuminate\Http\Request;

class EcomHelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helps=Ecom_help::all();
        return view('backend.ecomHelps.index',compact('helps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ecomHelps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // dd($request);
            $helps=new Ecom_help;
            if($request->hasFile('inputicon')){
                $imageName = rand(111,999).time().'.'.$request->inputicon->extension();
                $request->inputicon->move(public_path('uploads/icon'), $imageName);
                $helps->icon=$imageName;
            }
            $helps->title=$request->inputtitle;
            $helps->link=$request->inputlink;
            $helps->save();
            return redirect(route('ecom_help.index'));
        }catch(Exception $e){
            dd($e);
            return back()->withInput();
        }

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecom_help  $ecom_help
     * @return \Illuminate\Http\Response
     */
    public function show(Ecom_help $ecom_help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecom_help  $ecom_help
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecom_help $ecom_help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecom_help  $ecom_help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecom_help $ecom_help)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecom_help  $ecom_help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecom_help $ecom_help)
    {
        //
    }
}
