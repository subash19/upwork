<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    public function dashboard(Request $request)
    {
      $this->data('title',$this->makeTitle('dashboard'));
      return view($this->pagePath.'dashboard',$this->data);
    }
}
