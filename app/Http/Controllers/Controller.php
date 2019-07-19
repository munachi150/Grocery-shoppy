<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function sanitize_num($dirty) {
    	$clean = str_replace(",", "", $dirty);
    	$clean = str_replace(" ", "", $clean);
    	$clean = str_replace("N", "", $clean);
    	$clean = str_replace("#", "", $clean);
    	$clean = str_replace("$", "", $clean);
        $clean = str_replace("USD", "",$clean);
        return $clean;
    }
}
