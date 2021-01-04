<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Image;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * index page for admin
     * */
    public function index(){
        $image=DB::table('images')->paginate(5);

        return view('admin_home')->with('image',$image);
    }

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

        return redirect('/admin_index');
    }

    public function destroy($id){
        $image=Image::find($id);
        $image->delete();
        return redirect('/admin_index');
    }

}
