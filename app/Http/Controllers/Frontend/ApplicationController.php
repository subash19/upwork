<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Http\Request;

class ApplicationController extends FrontendController
 {   
       public function home()
    {
        $this->data('title',$this->makeTitle('home'));
        return view($this->pagePath.'home',$this->data);
    }

           public function contact()
    {
        
        return view($this->pagePath.'home',$this->data);
    }
}
