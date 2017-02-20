<?php

namespace App\Http\Controllers;

use Request;
use App\kategori_lembur;
use App\Golongan; 
use App\Pegawai;
use App\lembur_pegawai;                                                                                                                                                                                    

class lembur_pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$kategori_lembur=kategori_lembur::all();
    	$Pegawai=Pegawai::all();
    	$lembur_pegawai=Lembur_pegawai::all();
    	return view('lembur_pegawai.index', compact('lembur_pegawai', 'Pegawai', 'kategori_lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $kategori_lembur=kategori_lembur::all();
        $Pegawai=Pegawai::all();
       $lembur_pegawai=lembur_pegawai::all();
       return view('lembur_pegawai.create', compact('lembur_pegawai', 'kategori_lembur', 'Pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembur_pegawai=Request::all();
        Lembur_pegawai::create($lembur_pegawai);
        return redirect('lembur_pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$kategori_lembur=kategori_lembur::all();
        $Pegawai=Pegawai::all();
        $lembur_pegawai=lembur_pegawai::find($id);

        return view('lembur_pegawai.edit', compact('lembur_pegawai', 'Pegawai', 'kategori_lembur'));
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
       $lembur_pegawaiUpdate=Request::all();
        $lembur_pegawai=lembur_pegawai::find($id);
        $lembur_pegawai->update($lembur_pegawaiUpdate);
        return redirect('lembur_pegawai'); 
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_lembur::find($id)->delete();
        return redirect('lembur_pegawai');
    }
}
