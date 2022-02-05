<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PermintaanController extends Controller
{
    //
    public function index()
    {
        $permintaan_barang = DB::table('permintaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_permintaan',
            'permintaan_barang' => $permintaan_barang,
        );

        return view('permintaan/view_permintaan', $data); 
    }

    public function insertPermintaan()
    {
        // $rencana_permintaan_barang = DB::table('rencana_permintaan_barang')->get();
        $permintaan_barang = DB::table('permintaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_permintaan',
            // 'rencana_permintaan_barang' => $rencana_permintaan_barang,
            'permintaan_barang' => $permintaan_barang,
        );

        return view('permintaan/form_permintaan',$data);  
    }

    public function tambahpermintaan(Request $post)
    {  
        DB::table('permintaan_barang')->insert([
            'URAIAN_PERMINTAAN' => $post->URAIAN_PERMINTAAN,
            'VOLUME2' => $post->VOLUME2,
            'SATUAN2' => $post->SATUAN2,
            'REALISASI2' => $post->REALISASI2,
            'KETERANGAN_RPB2' => $post->KETERANGAN_RPB2,
        ]);

        return redirect('/view_permintaan');
    }

    public function hapus($ID_PERMINTAAN)
    {
    	DB::table('pengadaan_barang')->where('ID_PERMINTAAN',$ID_PERMINTAAN)->delete();
	    return redirect('/view_pengadaan');
    }
}
