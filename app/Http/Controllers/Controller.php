<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Toastr;

class Controller extends BaseController
{
    public $notice;

    public function __construct()
    {
        $this->notice = new Toastr();
    }
    
    use AuthorizesRequests, ValidatesRequests;
}
 