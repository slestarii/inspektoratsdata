<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PeminjamanInvController extends Controller
{
    //
    public function index()
    {
        $peminjaman_barang_inv = DB::table('peminjaman_barang_inv')->get();
        $data = array(
            'menu' => 'inventaris',
            'submenu' => 'view_peminjaman_inv',
            'peminjaman_barang_inv' => $peminjaman_barang_inv,
        );

        return view('peminjaman_inv/view_peminjaman_inv',$data); 
    }
}
