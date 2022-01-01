<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'menu' => 'dashboard',
            'submenu' => '',
        );

        return view('dashboard',$data);
    }
}
