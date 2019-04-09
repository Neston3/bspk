<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $imageEntry = new Image();
        //dd($request->upload_file);
        /*upload images*/
        if($request->hasFile('upload_file')){
            $files=$request->file('upload_file');

            foreach ($files as $file) {
                /*$extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;*/
                $filename=$file->getClientOriginalName();
                $file->move('img/upload/',$filename);
                $imageEntry->image_name=$filename;
            }

            $imageEntry->detail=$request->input('detail');
            $imageEntry->category = $request->input('taskoption');
            $imageEntry->save();
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image $image
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
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image $image
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
}
