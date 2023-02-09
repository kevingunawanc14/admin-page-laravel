<?php

namespace App\Models;


class Produk
{
    // ini nanti difetch dari database
    private static $data_produk = [
        ["nama" => "produk_1"],
        ["nama" => "produk_2"],
        ["nama" => "produk_3"],
        ["nama" => "produk_4"]
    ];

    public static function all()
    {
        return self::$data_produk;
    }

    public static function detailProduk($nama)
    {
        $dataProdukAll = [
            ["nama" => "produk_1", "harga" => 5000, "berat" => "10", "satuan" => "kg"],
            ["nama" => "produk_2", "harga" => 6000, "berat" => "20", "satuan" => "g"]
        ];


        $dataDetail = [];
        foreach ($dataProdukAll as $dataProduk) {
            if ($nama ===  $dataProduk['nama']) {
                $dataDetail = $dataProduk;
            }
        }

        return $dataDetail;
    }
}
