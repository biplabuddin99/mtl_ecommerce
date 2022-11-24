<?php

namespace App\Http\Controllers;

use App\Models\Ecom_partner;

use Illuminate\Http\Request;
use Exception;

class EcomPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Ecom_partner::all();
        return view('backend.partner.index',compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partner.create');
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
            $notification = array(
                'message' => 'Successfully Created',
                'alert-type' => 'success'
            );
            $errornotification = array(
                'message' => 'Please try again',
                'alert-type' => 'error'
            );
            $partner= new Ecom_partner;
            $partner->title=$request->title;
            $partner->link=$request->link;
            if($request->has('image'))
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/plogo'), $imageName);
                $partner->logo=$imageName;

            if($partner->save())
                return redirect()->route('partner.index')->with($notification);
            else
            return redirect()->route('partner.create')->with($errornotification);
        }catch(Exception $e){
            dd($e);
            return redirect()->route('partner.create')->with($errornotification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecom_partner  $ecom_partner
     * @return \Illuminate\Http\Response
     */
    public function show(Ecom_partner $ecom_partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecom_partner  $ecom_partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Ecom_partner::findOrFail($id);
        return view('backend.partner.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecom_partner  $ecom_partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $partner= Ecom_partner::findOrFail($id);
            $partner->title=$request->title;
            $partner->link=$request->link;
            if($request->has('image'))
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/plogo'), $imageName);
                $partner->logo=$imageName;

            if($partner->save())
                return redirect()->route('partner.index');
            else
            return redirect()->route('partner.edit');
        }catch(Exception $e){
            dd($e);
            return redirect()->route('partner.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecom_partner  $ecom_partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Ecom_partner::findOrFail($id);
        $partner->delete();
        return redirect()->back();
    }
}
