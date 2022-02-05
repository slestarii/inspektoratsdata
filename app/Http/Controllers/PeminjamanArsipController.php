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
        $user = DB::table('user')->get();
        $arsip = DB::table('arsip')->get();
        $data = array(
            'menu' => 'kearsipan',
            'submenu' => 'peminjaman_arsip',
            'peminjaman_arsip' => $peminjaman_arsip,
            'arsip' => $arsip,
            'user' => $user,
        );

        return view('peminjaman_arsip/view_peminjaman_arsip',$data); 
    }

    public function hapus($ID_PEMINJAMAN_ARSIP)
    {
    	DB::table('arsip')->where('ID_PEMINJAMAN_ARSIP',$ID_PEMINJAMAN_ARSIP)->delete();
	    return redirect('/view_peminjaman_arsip');
    }
}
