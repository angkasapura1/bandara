<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SurveyModel;

class SurveyController extends Controller
{
    public function viewIndex(){
    	$survey = SurveyModel::all();
    	return view('admin.survey.index',compact('survey'));
    }

    public function viewAddsurvey(){
    	return view('admin.survey.add');
    }
    	public function postsurvey(Request $request){
    		$this->validate($request, [
	   			'nama_survey' 	=> 'required',
	        ]);

	        $survey = new SurveyModel;

	        $survey->nama_survey 	= ucwords($request->nama_survey);
	        $survey->suka 			= '0';
	        $survey->tdk_suka 		= '0';

			$survey->save();
	   		// save to databases

	   		return redirect('administrator/survey')->with('pesan', 'Data survey telah ditambahkan !');
	    }

	public function viewEditsurvey($id){
		$detail = SurveyModel::find($id);
		return view('admin.survey.edit',compact('detail'));
	}

		public function postEditsurvey(Request $request){
			$this->validate($request, [
	   			'id_survey' 	=> 'required|numeric',
	   			'nama_survey' 	=> 'required',
	        ]);


	   		$survey = SurveyModel::find($request->id_survey);

	        $survey->nama_survey = $request->nama_survey;

			$survey->save();
			return redirect('administrator/survey')->with('pesan','Data survey telah diperbaharui');
		}

	public function viewDeletesurvey($id){
		return view('admin.survey.delete',compact('id'));
	}
	public function deletesurvey($id){
		SurveyModel::destroy($id);
		return redirect('administrator/survey')->with('pesan','Data berhasil dihapus');
	}
}
