<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    function rinso(){
        echo "Ini adalah Rinso";
    }
    function lifebuoy(){
        echo "Ini adalah Lifebuoy";
    }
    function sunlight(){
        echo "Ini adalah Sunlight ";
    }

    function promo($promo){
        echo "Selamat Anda Mendapatkan PROMO sebesar : $promo ribu";
    }

    function gajiKaryawan(){
        echo "Ini saatnya memberi gaji karyawan!";
    }
    function restok(){
        echo "Ini saatnya memberi restok barang!";
    }
    function bayarKontrak(){
        echo "Ini saatnya membayar tagihan kontrak toko!";
    }

}
