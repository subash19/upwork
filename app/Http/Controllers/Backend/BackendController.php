<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public $backendpath='backend';
    public $pagePath='';

    public function __construct()
    {
        
        $this->data('title',$this->makeTitle('welcome'));
        return $this->pagePath=$this->backendpath.'.pages.';
    }
}
