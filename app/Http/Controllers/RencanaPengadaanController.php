<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class RencanaPengadaanController extends Controller
{
    //
    public function index()
    {
        $rencana_pengadaan_barang = DB::table('rencana_pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_rencana_pengadaan',
            'rencana_pengadaan_barang' => $rencana_pengadaan_barang,
        );

        return view('rencana_pengadaan/view_rencana_pengadaan',$data); 
    }

    public function insertRencanaPengadaan()
    {
        $rencana_pengadaan_barang = DB::table('rencana_pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_rencana_pengadaan',
            'rencana_pengadaan_barang' => $rencana_pengadaan_barang,
        );

        return view('rencana_pengadaan/form_rencana_pengadaan',$data);  
    }

    public function tambahRencanaPengadaan(Request $post)
    {  
        DB::table('rencana_pengadaan_barang')->insert([
            'URAIAN_R_PENGADAAN' => $post->URAIAN_R_PENGADAAN,
            'VOLUME' => $post->VOLUME,
            'SATUAN' => $post->SATUAN,
            'PAGU' => $post->PAGU,
            'REALISASI' => $post->REALISASI,
            'KETERANGAN_RPB' => $post->KETERANGAN_RPB,
        ]);

        return redirect('/view_rencana_pengadaan');
    }

    public function hapus($ID_PENGADAAN)
    {
    	DB::table('rencana_pengadaan_barang')->where('ID_PENGADAAN',$ID_PENGADAAN)->delete();
	    return redirect('/view_rencana_pengadaan');
    }
}