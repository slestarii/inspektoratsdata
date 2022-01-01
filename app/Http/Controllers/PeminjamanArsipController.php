<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PeminjamanArsipController extends Controller
{
    //
    public function index()
    {
        $peminjaman_arsip = DB::table('peminjaman_arsip')->get();
        $data = array(
            'menu' => 'kearsipan',
            'submenu' => 'peminjaman_arsip',
            'peminjaman_arsip' => $peminjaman_arsip,
        );

        return view('peminjaman_arsip/view_peminjaman_arsip',$data); 
    }
}
