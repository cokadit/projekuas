<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	$this->middleware(function($request,$next){
			if (session('success_message')) {
			           Alert::toast(session('success_message'),'success');
			        }

            elseif (session('danger_message')) {
                       Alert::toast(session('danger_message'),'warning');
                    }



			return $next($request);
		});

    	
    }
}
