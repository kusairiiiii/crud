<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all()->toArray();
	return view('tampil', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$mahasiswa = new Mahasiswa();
        $this->validate(request(), [
		'nama' => 'required',
		'nim' => 'required'
	]);
	$mahasiswa->nama = $request->get('nama');
	$mahasiswa->nim = $request->get('nim');
	$mahasiswa->save();
	return redirect('/mhs')->with('success', 'Data Mahasiswa Berhasil Ditambah!');
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
        $mahasiswa = Mahasiswa::find($id);
	return view('edit',compact('mahasiswa','id'));
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
        $mahasiswa = Mahasiswa::find($id);
	$this->validate(request(), [
		'nama' => 'required',
		'nim' => 'required'
	]);
	$mahasiswa->nama = $request->get('nama');
	$mahasiswa->nim = $request->get('nim');
	$mahasiswa->save();
	return redirect('mhs')->with('success','Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
	$mahasiswa->delete();
	return redirect('mhs')->with('success','Data Mahasiswa Berhasil Dihapus!');
    }
}
