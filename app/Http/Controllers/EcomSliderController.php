<?php

namespace App\Http\Controllers;

use App\Models\EcomSlider;
use Illuminate\Http\Request;
use Exception;

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
        return view('backend.ecomSlider.create');
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
            $slider=new EcomSlider;
            if($request->hasFile('inputpicture')){
                $imageName = rand(111,999).time().'.'.$request->inputpicture->extension();
                $request->inputpicture->move(public_path('uploads/sliderimage'), $imageName);
                $slider->image=$imageName;
            }
            $slider->title=$request->inputtitle;
            $slider->description=$request->inputdescription;
            $slider->link=$request->inputlink;
            $slider->save();
            return redirect(route('ecomSlider.index'))->with($notification);
        }catch(Exception $e){
            dd($e);
            return back()->withInput()->with($errornotification);
        }
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
        return view('backend.ecomSlider.edite',compact('ecomSlider'));
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
        try{
            $notification = array(
                'message' => 'Successfully Update',
                'alert-type' => 'success'
            );
            $errornotification = array(
                'message' => 'Please try again',
                'alert-type' => 'error'
            );
            $slider=$ecomSlider;
            if($request->hasFile('inputpicture')){
                $imageName = rand(111,999).time().'.'.$request->inputpicture->extension();
                $request->inputpicture->move(public_path('uploads/sliderimage'), $imageName);
                $slider->image=$imageName;
            }
            $slider->title=$request->inputtitle;
            $slider->description=$request->inputdescription;
            $slider->link=$request->inputlink;
            $slider->save();
            return redirect(route('ecomSlider.index'))->with($notification);
        }catch(Exception $e){
            dd($e);
            return back()->withInput()->with($errornotification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcomSlider  $ecomSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcomSlider $ecomSlider)
    {
        $ecomSlider->delete();
        return back();
    }
}
