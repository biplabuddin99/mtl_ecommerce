<?php

namespace App\Http\Controllers;

use App\Models\Ecom_page;
use Illuminate\Http\Request;
use Exception;

class EcomPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Ecom_page::all();
        return view('backend.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.create');
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
            $pages= new Ecom_page;
            $pages->title->$request->title;
            $pages->description->$request->des;
            $pages->slug->$request->slug;
            $pages->menu_location->$request->menuLocation;
            $pages->order_menu->$request->orderMenu;

            if($pages->save())
                return redirect()->route('page.index')->with($notification);
            else
            return redirect()->route('page.create')->with($errornotification);
        }catch(Exception $e){
            dd($e);
            return redirect()->route('page.create')->with($errornotification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecom_page  $ecom_page
     * @return \Illuminate\Http\Response
     */
    public function show(Ecom_page $ecom_page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecom_page  $ecom_page
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecom_page $ecom_page)
    {
        return view('backend.page.create',compact('ecom_page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecom_page  $ecom_page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecom_page $ecom_page)
    {
        try{
            $notification = array(
                'message' => 'Successfully Updated',
                'alert-type' => 'success'
            );
            $errornotification = array(
                'message' => 'Please try again',
                'alert-type' => 'error'
            );
            $pages= $ecom_page;
            $pages->title->$request->title;
            $pages->description->$request->des;
            $pages->slug->$request->slug;
            $pages->menu_location->$request->menuLocation;
            $pages->order_menu->$request->orderMenu;

            if($pages->save())
                return redirect()->route('page.index')->with($notification);
            else
            return redirect()->route('page.create')->with($errornotification);
        }catch(Exception $e){
            dd($e);
            return redirect()->route('page.create')->with($errornotification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecom_page  $ecom_page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecom_page $ecom_page)
    {
        //
    }
}
