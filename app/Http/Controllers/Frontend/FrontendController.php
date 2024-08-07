<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public $frontendpath='frontend';
    public $pagePath='';

    public function __construct()
    {
        
        $this->data('title',$this->makeTitle('welcome'));
        return $this->pagePath=$this->frontendpath.'.pages.';
    }
}
