<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PengadaanController extends Controller
{
    //
    public function index()
    {
        $pengadaan_barang = DB::table('pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_pengadaan',
            'pengadaan_barang' => $pengadaan_barang,
        );

        return view('pengadaan/view_pengadaan', $data); 
    }

    public function dropdownPengadaan(Request $post)
    {
        $pengadaan_barang = DB::table('rencana_pengadaan_barang')->join('barang_pakai_habis', 'rencana_pengadaan_barang.ID_BARANG_HABIS_PAKAI', '=', 'barang_pakai_habis.ID_BARANG_HABIS_PAKAI')->where('ID_PENGADAAN', $post->ID_PENGADAAN)->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_pengadaan',
            'pengadaan_barang' => $pengadaan_barang,
        );

        return view('/pengadaan/dropdown_pengadaan', $data);
    }

    public function insertPengadaan()
    {
        $barang_pakai_habis = DB::table('barang_pakai_habis')->get();
        $rencana_pengadaan_barang = DB::table('rencana_pengadaan_barang')->join('barang_pakai_habis', 'rencana_pengadaan_barang.ID_BARANG_HABIS_PAKAI', '=', 'barang_pakai_habis.ID_BARANG_HABIS_PAKAI')->get();
        $pengadaan_barang = DB::table('pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_pengadaan',
            'barang_pakai_habis' => $barang_pakai_habis,
            'rencana_pengadaan_barang' => $rencana_pengadaan_barang,
            'pengadaan_barang' => $pengadaan_barang,
        );

        return view('pengadaan/form_pengadaan',$data);  
    }

    public function tambahPengadaan(Request $post)
    {  
        DB::table('pengadaan_barang')->insert([
            'URAIAN_PENGADAAN1' => $post->URAIAN_PENGADAAN1,
            'VOLUME1' => $post->VOLUME1,
            'SATUAN1' => $post->SATUAN1,
            'PAGU1' => $post->PAGU1,
            'REALISASI1' => $post->REALISASI1,
            'KETERANGAN_RPB1' => $post->KETERANGAN_RPB1,
        ]);

        return redirect('/view_pengadaan');
    }

    public function hapus($ID_PENGADAAN1)
    {
    	DB::table('pengadaan_barang')->where('ID_PENGADAAN1',$ID_PENGADAAN1)->delete();
	    return redirect('/view_pengadaan');
    }
}
