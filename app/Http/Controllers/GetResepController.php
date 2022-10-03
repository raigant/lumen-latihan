<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class GetResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['message' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = [
                [
                    "id" => 23,
                    "nama_obat" => "Parasetamol 500mg",
                    "jumlah" => 30,
                    "satuan" => "Tablet",
                    "harga" => "250"
                ],
                [
                    "id" => 223,
                    "nama_obat" => "Amoksilin 500mg",
                    "jumlah" => 15,
                    "satuan" => "Tablet",
                    "harga" => "550"
                ],
                [
                    "id" => 255,
                    "nama_obat" => "Diazepam 10mg",
                    "jumlah" => 12,
                    "satuan" => "Tablet",
                    "harga" => "750"
                ],
            ];

            $result = [
                "message" => "success",
                "noresep" => $id,
                "dokter" => "dr. Rumah Sakit",
                "count" => count($data),
                "data" => $data
            ];
        } catch (QueryException $e) {
            $result = [
                "mesage" => $e->errorInfo
            ];
        }

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
