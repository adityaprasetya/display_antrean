<?php
namespace App\Controllers;

class Antrian_bpjs extends \App\Controllers\BaseController {

    public function index()
    {
        // Jika ingin melakukan pengolahan data sebelum menampilkan view, lakukan di sini
        
        // Memuat view daftar_pasien_bpjs.php
        return view('pasienbpjs/daftar_pasien_bpjs');
    }
}
