<?php

namespace App\General;
use Illuminate\Support\Facades\Config;

trait general
{
    public $data=[];

    public function data($key,$value='')
    {
        return $this->data[$key]=$value;
    }

    public function makeTitle($firstpart,$secondpart='')
    {
        if(empty($secondpart))
        {
            $secondpart=Config::get('title.company_name');
           
        }
         return $secondpart.'::'.$firstpart;
      
    }
}