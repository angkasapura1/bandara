<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TenanModel;
use Image;
use File;
use Auth;

class TenanController extends Controller
{
    public function viewIndex(){
    	$tenan = TenanModel::paginate(10);

    	return view('admin.tenan.index',compact('tenan'));
    }

    public function viewAddTenan(){
    	return view('admin.tenan.add');
    }
    	public function postTenan(Request $request){
	    	// give image uploded a name with extension
    		$this->validate($request, [
	   			'nama' 		=> 'required|max:100',
	            'kategori' 	=> 'required',
	            'map' 		=> 'required',
	   			'status' 	=> 'required',
	        ]);

	        $tenan = new TenanModel;

	        $tenan->nama 	= ucwords($request->nama);
	        $tenan->status 	= $request->status;
	        $tenan->kategori 	= $request->kategori;
	        $tenan->lihat 	= '0';

	   		if($request->hasFile('logo')){

	        	$tenan->logo = date('Ymdhis').'.'.$request->logo->getClientOriginalExtension();
		   		//upload image 
		   		$request->logo->move(public_path('images/logo/'),$tenan->logo);

		   		//resize image
		   		$pathFind = public_path('images/logo/'.$tenan->logo);
		   		$pathSave = public_path('images/logo/thumb/'.$tenan->logo);
                Image::make($pathFind)->resize(200, 200)->save($pathSave);
			}else{
				$tenan->logo = 'default.jpg';
			}

			if($request->hasFile('map')){

	        	$tenan->map = date('Ymdhis').'.'.$request->map->getClientOriginalExtension();
		   		//upload image 
		   		$request->map->move(public_path('images/map/'),$tenan->map);
			}

			$tenan->save();
	   		// save to databases

	   		return redirect('administrator/tenan')->with('pesan', 'Data tenan telah ditambahkan !');
	    }

	public function viewEditTenan($id){
		$detail = TenanModel::find($id);
		return view('admin.tenan.edit',compact('detail'));
	}

		public function postEditTenan(Request $request){
			$this->validate($request, [
	   			'id_tenan' 	=> 'required|numeric',
	   			'nama' 		=> 'required|max:100',
	   			'kategori' 	=> 'required',
	   			'status' 	=> 'required',
	        ]);


	   		$tenan = TenanModel::find($request->id_tenan);

	        $tenan->nama 	= $request->nama;
	        $tenan->status 	= $request->status;
	        $tenan->kategori 	= $request->kategori;


	        if($request->hasFile('logo')){

	        	$filename = public_path('images/logo/'.$tenan->logo);
	   			$filenamethumb = public_path('images/logo/thumb/'.$tenan->logo);
				File::delete([$filename, $filenamethumb]);

	        	$tenan->logo = date('Ymdhis').'.'.$request->logo->getClientOriginalExtension();
		   		//upload image 
		   		$request->logo->move(public_path('images/logo/'),$tenan->logo);

		   		//resize image
		   		$pathFind = public_path('images/logo/'.$tenan->logo);
		   		$pathSave = public_path('images/logo/thumb/'.$tenan->logo);
	            Image::make($pathFind)->resize(200, 200)->save($pathSave);
			}

			if($request->hasFile('map')){
	        	$filename = public_path('images/map/'.$tenan->map);
				File::delete($filename);

	        	$tenan->map = date('Ymdhis').'.'.$request->map->getClientOriginalExtension();
		   		//upload image 
		   		$request->map->move(public_path('images/map/'),$tenan->map);
			}

			$tenan->save();
			return redirect('administrator/tenan')->with('pesan','Data berhasil diperbaharui');
		}

	public function viewDeleteTenan($id){
		return view('admin.tenan.delete',compact('id'));
	}
	public function deleteTenan($id){
		$tenan 	= TenanModel::find($id);
		$logo 		= public_path('images/logo/'.$tenan->logo);
		$logothumb 	= public_path('images/logo/thumb/'.$tenan->logo);
    	$map 		= public_path('images/map/'.$tenan->map);
		File::delete([$logo,$map]);
		if($tenan->logo == 'default.jpg')
		File::delete([$logothumb]);

		$tenan->delete();

		return redirect('administrator/tenan')->with('pesan','Data berhasil dihapus');
	}
}
