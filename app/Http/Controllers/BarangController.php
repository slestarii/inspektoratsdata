<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barang_pakai_habis = DB::table('barang_pakai_habis')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_barang',
            'barang_pakai_habis' => $barang_pakai_habis,
        );

        return view('barang/view_barang',$data); 
    }

    public function insertBarang()
    {
        $barang_pakai_habis = DB::table('barang_pakai_habis')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_barang',
            'barang_pakai_habis' => $barang_pakai_habis,
        );

        return view('barang/form_barang',$data); 
    }

    public function tambahBarang(Request $post)
    {  
        DB::table('barang_pakai_habis')->insert([
            'URAIAN_RINCIAN' => $post->URAIAN_RINCIAN,
            'SALDO_AWAL' => $post->SALDO_AWAL,
            'PENAMBAHAN' => $post->PENAMBAHAN,
            'PENGURANGAN' => $post->PENGURANGAN,
            'SALDO_AKHIR' => $post->SALDO_AKHIR,
            'HARGA_PEMBELIAN' => $post->HARGA_PEMBELIAN,
            'SALDO_AKHIR_PERSEDIAAN' => $post->SALDO_AKHIR_PERSEDIAAN,
        ]);

        return redirect('/view_barang');
    }

    public function hapus($ID_BARANG_HABIS_PAKAI)
    {
    	DB::table('barang_pakai_habis')->where('ID_BARANG_HABIS_PAKAI',$ID_BARANG_HABIS_PAKAI)->delete();
	    return redirect('/view_barang');
    }
}