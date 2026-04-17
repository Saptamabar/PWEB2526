<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function produk()
    {
        $produk = [
            [
                "Nama" => "Benih Padi",
                "Harga" => "500",
                "Jumlah" => "1"
            ],
            [
                "Nama" => "Benih Bayam",
                "Harga" => "500",
                "Jumlah" => "1"
            ],
             [
                "Nama" => "Benih Kelapa",
                "Harga" => "100",
                "Jumlah" => "20"
            ],
        ];

        return view('produk',["produk" => $produk]);
    }
}
