<?php

namespace App\Http\Controllers;

use Request;
use App\kategori_lembur;
use App\Jabatan;
use App\Golongan;                                                                                                                                                                                     

class kategori_lembur_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$kategori_lembur=kategori_lembur::all();
    	$jabatanvar=Jabatan::all();
    	$golonganvar=Golongan::all();
    	return view('kategori_lembur.index', compact('kategori_lembur', 'jabatanvar', 'golonganvar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $Jabatan=Jabatan::all();
        $Golongan=Golongan::all();
       $kategori_lembur=kategori_lembur::all();
       return view('kategori_lembur.create', compact('kategori_lembur', 'Jabatan', 'Golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori_lembur=Request::all();
        kategori_lembur::create($kategori_lembur);
        return redirect('kategori_lembur');
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
    	$Jabatan=Jabatan::all();
    	$Golongan=Golongan::all();
    	$kategori_lembur=kategori_lembur::find($id);

    	return view('kategori_lembur.edit', compact('kategori_lembur', 'Jabatan', 'Golongan'));
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
        $kategori_lemburUpdate=Request::all();
        $kategori_lembur=kategori_lembur::find($id);
        $kategori_lembur->update($kategori_lemburUpdate);
        return redirect('kategori_lembur');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_lembur::find($id)->delete();
        return redirect('kategori_lembur');
    }
}
