<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TrialFilter extends Controller
{
    public function filter($id)
    {
        $array = [
            [
                "namaObat" => "Obat ABC",
                "fb_obat_luar" => 1,
                "jumlah" => 1,
                "satuan" => "vial"
            ],
            [
                "namaObat" => "Obat DEF",
                "fb_obat_luar" => 1,
                "jumlah" => 2,
                "satuan" => "vial"
            ],
            [
                "namaObat" => "Obat GHI",
                "fb_obat_luar" => 0,
                "jumlah" => 60,
                "satuan" => "tablet"
            ],
            [
                "namaObat" => "Obat JKL",
                "fb_obat_luar" => 1,
                "jumlah" => 2,
                "satuan" => "vial"
            ],
        ];

        $etiketPutih = Arr::where($array, function ($val) {
            return $val['fb_obat_luar'] == 0;
        });
        /**
         * array_values() returns all the values from the array and indexes the array numerically.
         * array_values() hanya mengembalikan nilai value dari array & indexnya diganti dengan
         * bilangan dan diulang dari 0 kembali
         */
        $etiketPutih = array_values($etiketPutih);

        $etiketBiru = Arr::where($array, function ($val) {
            return $val['fb_obat_luar'] == 1;
        });

        $etiketBiru = array_values($etiketBiru);

        $response = [
            'count' => count($array),
            'etiketPutih' => $etiketPutih,
            'etiketBiru' => $etiketBiru
        ];

        return response()->json($response);
    }
}
