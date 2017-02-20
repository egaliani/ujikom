<?php

namespace App\Http\Controllers;

use Request;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use DB;
use Validator;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class Pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
    }
    
    public function index()
    {
        //
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        $Pegawai = Pegawai::all();
        return view('Pegawai.index', compact('Jabatan', 'Golongan', 'Pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

        $dd = User::all();
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        return view('Pegawai.create', compact('kode', 'Pegawai', 'dd', 'Jabatan', 'Golongan'));
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
        $input = Request::all();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'permission' => $input['permission']
        ]);

     //isi field cover jika ada cover yg di upload
if ($request->hasfile('Photo')){
//mengambil file yang di upload
$uploaded_Photo =$request->file('Photo');
//mengambil extension file
$extension=
$uploaded_Photo->getClientOriginalExtension();
//membuat nama file random berikut extension
$fillname=md5(time()) . '.'. $extension;
//menyipan cover ke folder public/img
$destinationPath = public_path().
DIRECTORY_EPARATOR . 'img';
$uploaded_Photo->move($destinationPath,$filename);
//mengisi field cover di book dengan filename yang baru di buat 

           $mm = new Pegawai;
           $mm->Nip = Input::get('Nip'); 
           $mm->user_id = $user->id;  
           $mm->Kode_jabatan = Input::get('Kode_jabatan'); 
           $mm->Kode_golongan = Input::get('Kode_golongan'); 
           $mm->Photo = $filename;
           $mm->save();
        }
        return redirect('Pegawai');
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
        $Pegawai = Pegawai::find($id);
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();

        return view('Pegawai.edit', compact('Pegawai', 'Jabatan', 'Golongan'));
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
        $Pegawai = Pegawai::find($id);

        if(Request::hasFile('Photo')){
            $file = Request::file('Photo');
            $destinationPath = public_path().'/image/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
        }
        
        $pegawai->Nip = Request::get('Nip'); 
        $pegawai->Kode_jabatan = Request::get('Kode_jabatan'); 
        $pegawai->Kode_golongan = Request::get('Kode_golongan'); 
        $pegawai->Photo = $filename;
        $pegawai->save();
        return redirect('Pegawai');
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
        Pegawai::find($id)->delete();
        return redirect('Pegawai');
    }
}
