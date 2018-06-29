<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\File;
use Storage;

class uploadController extends Controller
{
	public function index(){
		return view('upload');
	}

	public function store(Request $request){
		if($request->hasFile('image')){ 
			$request->file('image');
			$img = Image::make($request->file('image'));
			$filename = str_random(20).'.jpg'; //$request->image->getClientOriginalName();
			$filesize = $request->image->getClientSize();
			$img->save(public_path('images/'.$filename));
			//$img->save(public_path('images/'.str_random(40).'.jpg')); //Random name
			
			$file = new File;
			$file->name = $filename;
			$file->size = $filesize;
			$file->save();
			//return public_path('images/'.$filename);
			return redirect('/show');
		}else{
			return 'No file selected';
		}
	}

	public function show(){
		$pic = File::get();
		return view('showimage',compact('pic'));
	}

	public function edit($id){
		$pic = File::find($id);
		return view('edit-image',compact('pic'));
	}
	
	public function update(Request $req){

		//$item = File::find($req->id);
		if($req->hasFile('image')){ 
		//dd($req);
			$img = Image::make($req->file('image'));
			$filename = str_random(20).'.jpg';
			$filesize = $req->image->getClientSize();
			$img->save(public_path('images/'.$filename));

			$item = File::find($req->id);
			$oldname = $item->name;
			unlink(public_path('images/'.$oldname));
			
			$item->name = $filename;
			$item->size = $filesize;
			$item->save(); 
			return redirect('/show');

		}else{
			return 'No file selected';
		}
	}

	public function delete($id){
		$del = File::where('id',$id)->first();
		$name = $del->name;
		unlink(public_path('images/'.$name));
		$del->delete();
		return redirect('/show');
	}


	public function dataCreate(Request $request){
		if($request->hasFile('image')){ 
			$data = $request->file('image');
			$filename = str_random(20).'.mp4'; 
			$data->move(public_path('datafiles/'),$filename);
			//$img->save(public_path('images/'.$filename)););
			//$file = new File;
			//$file->name = $filename;
			//$file->save();
			
			return 'has data';
		}else{
			return 'No file selected';
		}
	}
}
