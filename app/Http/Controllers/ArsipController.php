<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;;

class ArsipController extends Controller
{
    //
    public function index()
    {
        $arsip = DB::table('arsip')->get();
        $data = array(
            'menu' => 'kearsipan',
            'submenu' => 'arsip',
            'arsip' => $arsip,
        );

        return view('arsip/view_arsip',$data); 
    }

    public function insertArsip()
    {
        $arsip = DB::table('arsip')->get();
        $data = array(
            'menu' => 'kearsipan',
            'submenu' => 'arsip',
            'arsip' => $arsip,
        );

        return view('arsip/form_arsip',$data); 
    }

    public function tambahArsip(Request $post)
    {  
        DB::table('arsip')->insert([
            'KODE_KLAS' => $post->KODE_KLAS,
            'INDEKS' => $post->INDEKS,
            'JENIS_ARSIP' => $post->JENIS_ARSIP,
            'KURUN_WAKTU' => $post->KURUN_WAKTU,
            'TINGKAT_PERKEMBANGAN' => $post->TINGKAT_PERKEMBANGAN,
            'JUMLAH' => $post->JUMLAH,
            'KETERANGAN_ARSIP' => $post->KETERANGAN_ARSIP,
            'NO_DEF_FOLDER' => $post->NO_DEF_FOLDER,
            'NO_DEF_BLOK' => $post->NO_DEF_BLOK,
            'LOKASI_SIMPAN' => $post->LOKASI_SIMPAN,
            'JANGKA_WAKTU' => $post->JANGKA_WAKTU,
            'NASIB_AKHIR' => $post->NASIB_AKHIR,
            'KATEGORI_ARSIP' => $post->KATEGORI_ARSIP,
            'TAHUN_PEMINDAHAN' => $post->TAHUN_PEMINDAHAN,
        ]);

        return redirect('/view_arsip');
    }

    public function hapus($ID_ARSIP)
    {
    	DB::table('arsip')->where('ID_ARSIP',$ID_ARSIP)->delete();
	    return redirect('/view_arsip');
    }
}
