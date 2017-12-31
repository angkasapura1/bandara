<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProfileModel;
use App\Model\TenanModel;
use App\Model\BeritaModel;
use App\Model\SurveyModel;

class HomePageController extends Controller
{
    public function viewBeranda(){
        $profil = ProfileModel::find(1);
        $news = BeritaModel::take(3)->get();
        return view('homepage.beranda',compact('news','profil'));
    }

    public function viewTenan($kategori){
        if($kategori == 'all')
            $data = TenanModel::where('status','show')->orderBy('nama','asc')->get();
        elseif($kategori !='all')
            $data = TenanModel::where('status','show')->where('kategori',$kategori)->orderBy('nama','asc')->get();
        
        $populer = TenanModel::orderBy('lihat','desc')->limit(10)->get();
        return view('homepage.tenan',compact('data','populer','kategori'));
    }
        public function detailTenan($kategori,$id){
            $tenan = TenanModel::find($id);
            if($kategori == 'all')
                $data = TenanModel::where('status','show')->orderBy('nama','asc')->get();
            elseif($kategori !='all')
                $data = TenanModel::where('status','show')->where('kategori',$kategori)->orderBy('nama','asc')->get();
            
            $populer = TenanModel::orderBy('lihat','desc')->limit(10)->get();
            return view('homepage.detail-tenan',compact('data','populer','tenan','kategori'));
        }

    public function viewJadwal(){
        return view('homepage.jadwal');
    }

    public function viewSurvey(){
        $survey = SurveyModel::all();
        return view('homepage.survey',compact('survey'));
    }
        public function klikSurvey($id,$jenis){
            $survey = SurveyModel::find($id);
            if($jenis == 'like')
                $survey->suka = $survey->suka+1;
            elseif($jenis == 'dislike')
                $survey->tdk_suka = $survey->tdk_suka+1;
            $survey->save();
            return 'save';
        }

    public function viewProfil(){
        $profil = ProfileModel::find(1);
        return view('homepage.profil',compact('profil'));
    }

    public function viewPromo(){
        $promo = BeritaModel::all();
        return view('homepage.promo',compact('promo'));
    }
    public function viewDetailPromo($id){
        return view('homepage.promo-detail');
    }
    public function viewContact(){
        $profil = ProfileModel::find(1);
        return view('homepage.contact',compact('profil'));
    }
    public function jalankan(){
        shell_exec('call\run.cmd');
        return redirect()->back();
    }

}
