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
        $user = DB::table('user')->get();
        $barang_inventaris = DB::table('barang_inventaris')->get();
        $data = array(
            'menu' => 'inventaris',
            'submenu' => 'view_peminjaman_inv',
            'peminjaman_barang_inv' => $peminjaman_barang_inv,
            'barang_inventaris' => $barang_inventaris,
            'user' => $user,
        );

        return view('peminjaman_inv/view_peminjaman_inv',$data); 
    }
    public function hapus($ID_PEMINJAMAN_INV)
    {
    	DB::table('barang_inventaris')->where('ID_PEMINJAMAN_INV',$ID_PEMINJAMAN_INV)->delete();
	    return redirect('/view_peminjaman_inv');
    }
}
