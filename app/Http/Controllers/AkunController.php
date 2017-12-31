<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AkunController extends Controller
{
    public function viewIndex(){
		$data = User::find(Auth::user()->id);

		return view('admin.akun.index',compact('data'));
	}

	public function postAkun(Request $request){
		$this->validate($request, [
   			'name' 		=> 'required|min:8|max:32',
   			'username' 	=> 'required|min:8|max:32',
   			'password' 	=> 'nullable|min:8|max:32',
   			'confirm' 	=> 'nullable|min:8|max:32',
        ]);

		$user = User::find(Auth::user()->id);
		$user->name = $request->name;
		$user->username = $request->username;
		
		if($request->password == $request->confirm){
			$user->password = bcrypt($request->password);
		}else{
	        return redirect()->back()->with('password', 'Password baru dan konfirmasi password tidak sama !')->withInput($request->only('password', 'remember'));
		}

		$user->save();
        return redirect()->back()->with('success', 'Berhasil memperbaharui data !');
	}
}
