<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProfileModel;
use App\Model\TenanModel;
use App\Model\BeritaModel;
use App\Model\SurveyModel;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class HomeController extends Controller
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
    public function flight(){
        date_default_timezone_set('Asia/Makassar');
        // return date("Y-m-d\TH:i:s\Z");

        $tgl = date("Y-m-d\TH:i:s\Z");
        $tglz= date('Y-m-d H:i:s');
        $tgl2 = date('Y-m-d\TH:i:s\Z',strtotime('+1 day',strtotime($tglz)));
        // Get the actual response without headers
    	$client = new \GuzzleHttp\Client();
		// Create a request with auth credentials
		$request = $client->get('http://192.168.200.215/api/operational?ad=D&ap=WAAA&closed=false&new_time_gte='.$tgl.'&new_time_lte='.$tgl2.'&page=1',['auth'=>['wayfinding','wayfinding']]);
		$response = $request->getBody();
        $response = json_decode($response);

        $response = $response->results;

        $statusPenerbangan =array(
                'LAN' => 'Landing',
                'SCH' => 'Scheduled',
                'TWR' => 'To waiting room',
                'NBD' => 'Boarding',
                'SEC' => 'Second call',
                'LAC' => 'Last call',
                'GCL' => 'GCL',
                'CKO' => 'Check in open',
                'CKC' => 'Check in close',
                'ODD' => 'Delay Operational',
                'DUO' => 'Delay Operational',
                'WDD' => 'Delay bad weather',
                'DUB' => 'Delay bad weather',
                'TDD' => 'Delay technical',
                'DUT' => 'Delay technical',
                'COO' => 'Cancelled operational',
                'TCD' => 'Cancel technical',
                'WCD' => 'Cancel bad weather',
                'ETD' => 'Estimate',
                'ETA' => 'Estimate',
                'ALD' => 'Late arrival',
                'AUD' => 'Terlambat Tiba',
                'NPP' => 'No Operate',
                'EAA' => 'ETA airline',
                'AUB' => 'Delay bad weather UFN',
                'AUT' => 'Delay technical',
                'AUL' => 'Late Arrival',
                'ODA' => 'Delay Operational',
                'NOP' => 'Delay UFN',
                'WCA' => 'Cancel bad weather',
                'TCA' => 'Cancel technical',
                'CAA' => 'Cancel operational',
                'DVT' => 'Diverted',
                'CHF' => 'Chartered flight',
                'VVIP' => 'VVIP',
                'EXF' => 'Extra flight',
                'FRF' => 'Ferry flight',
                'ONT' => 'On time',
                'PSP' => 'Postponed',
                'RSC' => 'Reschedule',
                'TMR' => 'Tomorrow',
                'CUF' => 'Cancel UFN',
                'RTB'=>'Return to base',
                'VIP'=>'VIP',
                'CAN'=>'Cancelled',
                'DEP'=>'Departed',
                'DGB'=>'Delay',
                'FREE'=>'Free',
                'HGR'=>'Hangar',
                'AUO'=>'Delay operational',
                'LCF'=>'Local flight'

            );

        $hasil = array();
        for ($i=0; $i < 20; $i++) { 
            $hasil[$i] = $response[$i];
            $hasil[$i]->waktu = substr($hasil[$i]->new_time, 11,5);
            $respon = $client->get('http://192.168.200.215/api/airline/'.$hasil[$i]->airline,['auth'=>['wayfinding','wayfinding']]);
            $hasil[$i]->banner = json_decode($respon->getBody());
            $hasil[$i]->statuspenerbangan= $statusPenerbangan[$hasil[$i]->status];
        }

        // print_r($hasil);

        return json_encode($hasil);
    }
}
