<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function jalankan(){
        shell_exec('run.cmd');
        return redirect()->back();
    }

}
