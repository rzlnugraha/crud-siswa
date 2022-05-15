<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::latest()->get();

        return view('siswa.index', compact('siswas'));
    }

    public function indexAdmin()
    {
        $siswas = Siswa::latest()->get();

        return view('admin', compact('siswas'));
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
        // Bikin validasi request input
        $validate = Validator::make($request->all(), [
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required|in:M,F',
            'alamat' => 'required',
            'sekolah_id' => 'required|exists:sekolahs,id'
        ]);

        /* Kalo gagal validasinya */
        if ($validate->fails()) return response()->json(['success' => false, 'message' => 'Data invalid', 'errors' => $validate->errors()], 400);

        $siswa = Siswa::create($request->all());
        $token = $siswa->createToken('auth_token')->plainTextToken;

        return response()->json([
            'succses' => true,
            'message' => 'Berhasil nambah data',
            'token' => $token
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);

        return response()->json([
            'success' => true,
            'message' => empty($siswa) ? 'Data tidak ada' : 'Data ditemukan',
            'data' => $siswa
        ], 200);
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
        $validate = Validator::make($request->all(), [
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required|in:M,F',
            'alamat' => 'required',
            'sekolah_id' => 'required|exists:sekolahs,id'
        ]);

        /* Kalo gagal validasinya */
        if ($validate->fails()) return response()->json(['success' => false, 'message' => 'Data invalid', 'errors' => $validate->errors()], 400);

        Siswa::find($id)->update($request->all());

        return response()->json([
            'succses' => true,
            'message' => 'Berhasil rubah data'
        ]);
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
