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

        return view('pengadaan/view_pengadaan',$data); 
    }

    public function dropdownPengadaan(Request $post)
    {
        $pengadaan_barang = DB::table('rencana_pengadaan_barang')->where('ID_PENGADAAN', $post->ID_PENGADAAN)->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_pengadaan',
            'pengadaan_barang' => $pengadaan_barang,
        );

        return view('/pengadaan/dropdown_pengadaan');
    }

    public function insertPengadaan()
    {
        $rencana_pengadaan_barang = DB::table('rencana_pengadaan_barang')->get();
        $pengadaan_barang = DB::table('pengadaan_barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_rencana_pengadaan',
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
            'HARGA1' => $post->HARGA1,
        ]);

        return redirect('/view_pengadaan');
    }
}
