<?php

namespace App\Http\Controllers;

use App\Models\EcomAdd;
use Illuminate\Http\Request;
use Exception;

class EcomAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add=EcomAdd::all();
        return view('backend.ecomadd.index',compact('add'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ecomadd.create');
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
            $slider=new EcomAdd;
            if($request->hasFile('inputpicture')){
                $imageName = rand(111,999).time().'.'.$request->inputpicture->extension();
                $request->inputpicture->move(public_path('uploads/addimage'), $imageName);
                $slider->image=$imageName;
            }
            $slider->title=$request->inputtitle;
            $slider->description=$request->inputdescription;
            $slider->link=$request->inputlink;
            $slider->location=$request->inputlocation;
            $slider->save();
            return redirect(route('ecomAdd.index'))->with($notification);
        }catch(Exception $e){
            dd($e);
            return back()->withInput()->with($errornotification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EcomAdd  $ecomAdd
     * @return \Illuminate\Http\Response
     */
    public function show(EcomAdd $ecomAdd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcomAdd  $ecomAdd
     * @return \Illuminate\Http\Response
     */
    public function edit(EcomAdd $ecomAdd)
    {
        return view('backend.ecomadd.edit',compact('ecomAdd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcomAdd  $ecomAdd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcomAdd $ecomAdd)
    {
        try{
            $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            $errornotification = array(
                'message' => 'Please try again',
                'alert-type' => 'error'
            );
            $slider=$ecomAdd;
            if($request->hasFile('inputpicture')){
                $imageName = rand(111,999).time().'.'.$request->inputpicture->extension();
                $request->inputpicture->move(public_path('uploads/addimage'), $imageName);
                $slider->image=$imageName;
            }
            $slider->title=$request->inputtitle;
            $slider->description=$request->inputdescription;
            $slider->link=$request->inputlink;
            $slider->location=$request->inputlocation;
            $slider->save();
            return redirect(route('ecomAdd.index'))->with($notification);
        }catch(Exception $e){
            dd($e);
            return back()->withInput()->with($errornotification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcomAdd  $ecomAdd
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcomAdd $ecomAdd)
    {
        //
    }
}
