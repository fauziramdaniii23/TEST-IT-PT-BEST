<?php

namespace App\Http\Controllers;

use App\Models\datapegawai;
use App\Http\Requests\StoredatapegawaiRequest;
use App\Http\Requests\UpdatedatapegawaiRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class DatapegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'datapegawai' => datapegawai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pegawai_nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pegawai_alamat' => 'required',
            'no_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'hobi' => 'required | array'
            
        ]);
        $validatedData['hobi'] = implode(', ', $validatedData['hobi']);
        datapegawai::create($validatedData);

        return redirect('/')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(datapegawai $datapegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(datapegawai $datapegawai)
    {
        return view('edit',[
            'data' => $datapegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pegawai_nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pegawai_alamat' => 'required',
            'no_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'hobi' => 'array',  // Sesuaikan dengan kebutuhan validasi untuk 'hobi'
        ]);
        $data=datapegawai::findorFail($id);
        $data->update([
            'pegawai_nama' => $request->pegawai_nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'pegawai_alamat' => $request->pegawai_alamat,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'hobi' => implode(', ', $request->hobi),  // Menggabungkan nilai array menjadi satu string
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=datapegawai::findorFail($id);
        $data->delete();
        return back();
        
    }
}
