<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class InventarisController extends Controller
{
    //
    public function index()
    {
        $barang_inventaris = DB::table('barang_inventaris')->get();
        $data = array(
            'menu' => 'inventaris',
            'submenu' => 'view_inventaris',
            'barang_inventaris' => $barang_inventaris,
        );

        return view('inventaris/view_inventaris',$data); 
    }
}
