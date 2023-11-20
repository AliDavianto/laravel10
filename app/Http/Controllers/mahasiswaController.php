<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=mahasiswa::orderBy('npm','asc')->paginate(10);
        return view('mahasiswa.index')->with('data',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('npm', $request->npm);
        Session::flash('nama', $request->nama);
        Session::flash('nomor', $request->nomor);
        Session::flash('fakultas', $request->fakultas);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('tingkat', $request->tingkat);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('mulai', $request->mulai);
        Session::flash('akhir', $request->akhir);
        Session::flash('krs', $request->krs);
        $request->validate(
            [
                'npm' => 'required|numeric|unique:mahasiswa,npm',
                'nama'=> 'required',
                'nomor'=> 'required',
                'fakultas'=> 'required',
                'jurusan'=> 'required',
                'tingkat'=> 'required',
                'tanggal'=> 'required',
                'mulai'=> 'required',
                'akhir'=> 'required',
                'krs' => 'required|mimes:pdf|max:2048'
                
            ], [
                'npm.required' => 'NPM Wajib diisi',
                'npm.unique' => 'NPM sudah terdaftar',
                'npm.numeric' => 'NPM Wajib berbentuk angka',
                'no_wa.numeric' => 'Nomor Wajib berbentuk angka',
                'nama.required' => 'Nama Wajib diisi',
                'no_wa'=> 'Nomor Wajib diisi',
                'fakultas'=> 'Fakultas Wajib diisi',
                'jurusan'=> 'Jurusan Wajib diisi',
                'tingkat'=> 'Tingkat Wajib diisi',
                'tanggal'=> 'Tanggal Main Wajib diisi',
                'mulai'=> 'Jam Mulai Wajib diisi',
                'akhir'=> 'Jam Akhir Wajib diisi',
                'krs'=> 'KRS Wajib diisi',
            ]
        );

        
        $data =[
            'npm'=>$request->npm,
            'nama'=>$request->nama,
            'no_wa'=>$request->nomor,
            'fakultas'=>$request->fakultas,
            'jurusan'=>$request->jurusan,
            'tingkat'=>$request->tingkat,
            'tanggal'=>$request->tanggal,
            'mulai'=>$request->mulai,
            'akhir'=>$request->akhir,
            'krs'=>$request->krs,
        ];
        if ($request->hasFile('krs')) {
            $file = $request->file('krs');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('pdf', $fileName);

        }
        mahasiswa::create($data);
        return redirect()->to('mahasiswa')->with('Success','Berhasil Menambahkan Data');
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
        return"Hi".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
