<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class InventarisController extends Controller
{
    //
    public function index()
    {
        $barang_inventaris = DB::table('barang_inventaris')->get();
        $data = array(
            'menu' => 'inventaris',
            'submenu' => 'view_inventaris',
            'barang_inventaris' => $barang_inventaris,
        );

        return view('inventaris/view_inventaris',$data); 
    }

    public function insertInventaris()
    {
        $barang_inventaris = DB::table('barang_inventaris')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'view_barang',
            'barang_inventaris' => $barang_inventaris,
        );

        return view('inventaris/form_inventaris',$data);
    }

    public function tambahInventaris(Request $post)
    {  
        DB::table('barang_inventaris')->insert([
            'KODE_BARANG_INV' => $post->KODE_BARANG_INV,
            'NAMA_BARANG_INV' => $post->NAMA_BARANG_INV,
            'NOMOR_REG' => $post->NOMOR_REG,
            'MERK' => $post->MERK,
            'TYPE' => $post->TYPE,
            'UKURAN' => $post->UKURAN,
            'BAHAN' => $post->BAHAN,
            'TAHUN_PEROLEHAN' => $post->TAHUN_PEROLEHAN,
            'NO_PABRIK' => $post->NO_PABRIK,
            'NO_RANGKA' => $post->NO_RANGKA,
            'NO_MESIN' => $post->NO_MESIN,
            'NO_POLISI' => $post->NO_POLISI,
            'NO_BPKB' => $post->NO_BPKB,
            'HARGA_PEROLEHAN' => $post->HARGA_PEROLEHAN,
            'KETERANGAN_INV' => $post->KETERANGAN_INV,
        ]);
        return redirect('/view_inventaris');
    }

    public function hapus($ID_BARANG_INV)
    {
    	DB::table('barang_inventaris')->where('ID_BARANG_INV',$ID_BARANG_INV)->delete();
	    return redirect('/view_inventaris');
    }
}
