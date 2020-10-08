<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \Laravel\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laravel\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Laravel\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Laravel\Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    /*
     * return office index
     * */

    public function office_index()
    {
        //
        $category=DB::table('images')->get();
        return view('office')->with('type',$category);
    }

    /*
     * return tailoring index
     * */
    public function tailor_index(){
        $category=DB::table('images')->get();
        return view('tailoring')->with('type',$category);
    }

    /*
     * return embroidering index
     * */
    public function embroid_index(){
        $category=DB::table('images')->get();
        return view('embroidery')->with('type',$category);
    }

    /*
     * return embroidering index
     * */
    public function fabric_index(){
        $category=DB::table('images')->get();
        return view('fabric')->with('type',$category);
    }

    /*
     * contact page
     * */
    public function contact_us(){
        return view('contactus');
    }

}
