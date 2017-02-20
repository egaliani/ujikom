<?php

namespace App\Http\Controllers;

use Request;
use App\Pegawai;
use App\Tunjangan;
use App\Tunjangan_pegawai;

class Tunjangan_pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tunjangan_pegawai=Tunjangan_pegawai::all();
        $Tunjangan=Tunjangan::all();
        $Pegawai=Pegawai::all();
        return view('Tunjangan_pegawai.index', compact('Tunjangan_pegawai', 'Tunjangan', 'Pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Tunjangan=Tunjangan::all();
        $Pegawai=Pegawai::all();
       $Tunjangan_pegawai=Tunjangan_pegawai::all();
       return view('Tunjangan_pegawai.create', compact('Tunjangan_pegawai', 'Tunjangan', 'Pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tunjangan_pegawai=Request::all();
        Tunjangan_pegawai::create($Tunjangan_pegawai);
        return redirect('Tunjangan_pegawai');
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
