<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Firebase\JWT\JWT;
use App\Http\Responses\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
        $this->oResponse = new Response();
        // obtiene token del header
        // $this->oCurrentUser = app('request')->auth;
        // $dep = UserDepartment::where('user_id',$this->oCurrentUser->id)->first();
        // $this->idDepartament = $dep != null ? $dep->c_department_id : 0 ;

    }
}
