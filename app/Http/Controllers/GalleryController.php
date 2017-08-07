<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class GalleryController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$galleries = DB::table('galleries')->get();
    	return view('gallery/index',compact('galleries'));
    }
    public function create()
    {
        return view('gallery/create');
    	# code...
    }
    public function store(Request $request)
    {
        # code...
        $name = $request->input('name');
        $description = $request->input('description');
        $cover_image = $request->file('cover_image');
        //die($cover_image);
        $owner_id = 1;
        if($cover_image){
            $cover_image_filename = $cover_image->getClientOriginalName();
            $cover_image->move(public_path('images'),$cover_image_filename);
        }
        else{
            $cover_image_filename = 'noimage.jpg';
        }
        //insert into db
        DB::table('galleries')->insert(
            [
            'name' => $name,
            'description' => $description,
            'cover_image' => $cover_image_filename,
            'owner_id' => $owner_id
             ]
            );
        return redirect('/')->with('message','Photo Uploaded');
        //return view('gallery/index');
    }
}
