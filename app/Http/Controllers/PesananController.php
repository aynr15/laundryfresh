<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Pesanan List';
        // RAW SQL QUERY
        $pesanans = DB::select('
        select *, pesanans.id as pesanan_id, layanans.layanan as
        layanan_layanan
        from pesanans
        left join layanans on pesanans.layanan_id = layanans.id
        ');
        return view('pesanan.index', [
        'pageTitle' => $pageTitle,
        'pesanans' => $pesanans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Pesanan';
        // RAW SQL Query
        $layanans = DB::select('select * from layanans');
        return view('pesanan.create', compact('pageTitle', 'layanans'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'telepon' => 'required',
            'layanan' => 'required',
            'alamat' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            }
            // INSERT QUERY
            DB::table('pesanans')->insert([
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'layanan_id' => $request->layanan,
                'alamat' => $request->alamat,
            ]);
            return redirect()->route('pesanan.index');
            }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Pesanan';
        $layanans = DB::select('select * from layanans');
        $pesanans = DB::table('pesanans')
             ->select('*', 'pesanans.id as pesanan_id', 'layanans.id as layanan_id', 'pesanans.nama as nama')
             ->leftJoin('layanans', 'pesanans.layanan_id', 'layanans.id')
             ->where('pesanans.id', $id)
             ->first();
             return view('pesanan.edit', compact('pageTitle', 'layanans', 'pesanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('pesanans')->where('id', $id)->update([
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'layanan_id' => $request->layanan,
                'alamat' => $request->alamat,
            ]);
            return redirect()->route('pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // QUERY BUILDER
        DB::table('pesanans')
        ->where('id', $id)
        ->delete();
        return redirect()->route('pesanan.index');
    }

}
