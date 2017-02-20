<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan;
use App\Golongan;
use App\Jabatan;

class Tunjangan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tunjangan=Tunjangan::all();
        $Jabatan=Jabatan::all();
        $Golongan=Golongan::all();
        return view('Tunjangan.index', compact('Tunjangan', 'Jabatan', 'Golongan'));
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
       $Tunjangan=Tunjangan::all();
       return view('Tunjangan.create', compact('Tunjangan', 'Jabatan', 'Golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $Tunjangan=Request::all();
        Tunjangan::create($Tunjangan);
        return redirect('Tunjangan');
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
        $Tunjangan=Tunjangan::find($id);

        return view('Tunjangan.edit', compact('Tunjangan', 'Jabatan', 'Golongan'));
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
        $TunjanganUpdate=Request::all();
        $Tunjangan=Tunjangan::find($id);
        $Tunjangan->update($TunjanganUpdate);
        return redirect('Tunjangan');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Tunjangan::find($id)->delete();
        return redirect('Tunjangan');
    }
}
