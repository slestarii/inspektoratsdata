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
        $barang_pakai_habis = DB::table('barang_pakai_habis')->get();
        $rencana_pengadaan_barang = DB::table('rencana_pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_rencana_pengadaan',
            'rencana_pengadaan_barang' => $rencana_pengadaan_barang,
            'barang_pakai_habis' => $barang_pakai_habis,
        );

        return view('rencana_pengadaan/view_rencana_pengadaan',$data); 
    }

    public function insertRencanaPengadaan()
    {
        $barang_pakai_habis = DB::table('barang_pakai_habis')->get();
        $rencana_pengadaan_barang = DB::table('rencana_pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_rencana_pengadaan',
            'rencana_pengadaan_barang' => $rencana_pengadaan_barang,
            'barang_pakai_habis' => $barang_pakai_habis,
        );

        return view('rencana_pengadaan/form_rencana_pengadaan',$data);  
    }

    public function tambahRencanaPengadaan(Request $post)
    {  
        DB::table('rencana_pengadaan_barang')->insert([
            'ID_BARANG_HABIS_PAKAI' => $post->ID_BARANG_HABIS_PAKAI,
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