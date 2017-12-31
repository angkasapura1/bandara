<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\BeritaModel;
use App\Model\ProfileModel;
use Image;
use File;
use Auth;

class AdminController extends Controller
{
    public function viewIndex(){
    	$profil 	= ProfileModel::find(1);
    	if($profil->suka>0) $pSuka = ($profil->suka/($profil->suka+$profil->tdk_suka))*100;
    	else $pSuka = 0;
    	if($profil->suka>0) $pTdkSuka = ($profil->tdk_suka/($profil->suka+$profil->tdk_suka))*100;
    	else $pTdkSuka = 0;
    	$event 	= BeritaModel::where('jenis','event')->orderBy('id_berita','desc')->take(5)->get();
    	$promo 		= BeritaModel::where('jenis','promo')->orderBy('id_berita','desc')->take(5)->get();
    	return view('admin.beranda.index',compact('event','promo','profil','pSuka','pTdkSuka'));
    }
	
	

}
