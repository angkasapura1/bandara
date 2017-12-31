<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BeritaModel;
use Image;
use File;
use Auth;

class BeritaController extends Controller
{
    public function viewIndex(){
    	$berita = BeritaModel::paginate(10);

    	return view('admin.berita.index',compact('berita'));
    }

    public function viewAddBerita(){
    	return view('admin.berita.add');
    }
    	public function postBerita(Request $request){

	    	// give image uploded a name with extension
    		$this->validate($request, [
	   			'judul'		=> 'required|max:100',
	            'jenis' 	=> 'required',
	            'gambar' 	=> 'required',
	   			'teks' 		=> 'required',
	        ]);

	        $berita = new BeritaModel;

	        $berita->judul 	= ucwords($request->judul);
	        $berita->jenis 	= $request->jenis;
	        $berita->teks 	= $request->teks;

	   		if($request->hasFile('gambar')){
	        	$berita->gambar = date('Ymdhis').'.'.$request->gambar->getClientOriginalExtension();
		   		//upload image 
		   		$request->gambar->move(public_path('images/gambar/'),$berita->gambar);

		   		//resize image
		   		$pathFind = public_path('images/gambar/'.$berita->gambar);
		   		$pathSave = public_path('images/gambar/thumb/'.$berita->gambar);
                Image::make($pathFind)->resize(200, 200)->save($pathSave);
			}

			$berita->save();
	   		// save to databases

	   		return redirect('administrator/berita-promo')->with('pesan', 'Data '.$berita->jenis.' telah ditambahkan !');
	    }

	public function viewEditBerita($id){
		$berita = BeritaModel::find($id);
		return view('admin.berita.edit',compact('berita'));
	}

		public function postEditBerita(Request $request){
			// give image uploded a name with extension
    		$this->validate($request, [
	   			'id_berita'	=> 'required|numeric',
	   			'judul'		=> 'required|max:100',
	            'jenis' 	=> 'required',
	            'gambar' 	=> 'nullable',
	   			'teks' 		=> 'required',
	        ]);


	   		$berita = BeritaModel::find($request->id_berita);

		    $berita->judul 	= ucwords($request->judul);
	        $berita->jenis 	= $request->jenis;
	        $berita->teks 	= $request->teks;

			if($request->hasFile('gambar')){
				$filename = public_path('images/gambar/'.$berita->gambar);
	   			$filenamethumb = public_path('images/gambar/thumb/'.$berita->gambar);
				File::delete([$filename, $filenamethumb]);
	        	$berita->gambar = date('Ymdhis').'.'.$request->gambar->getClientOriginalExtension();
		   		//upload image 
		   		$request->gambar->move(public_path('images/gambar/'),$berita->gambar);

		   		//resize image
		   		$pathFind = public_path('images/gambar/'.$berita->gambar);
		   		$pathSave = public_path('images/gambar/thumb/'.$berita->gambar);
                Image::make($pathFind)->resize(200, 200)->save($pathSave);
			}

			$berita->save();
			return redirect('administrator/berita-promo')->with('pesan','Data '.$berita->jenis.' berhasil diperbaharui');
		}

	public function viewDeleteBerita($id){
		return view('admin.berita.delete',compact('id'));
	}
	public function deleteBerita($id){
		$berita 	= BeritaModel::find($id);
		$gambar 		= public_path('images/gambar/'.$berita->gambar);
		$gambarthumb 	= public_path('images/gambar/thumb/'.$berita->gambar);
		File::delete([$gambar, $gambarthumb]);

		$berita->delete();

		return redirect('administrator/berita-promo')->with('pesan','Data berhasil dihapus');
	}
}
