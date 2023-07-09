<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class IbuController extends Controller
{
    public function dataibu()
    {
        $ibus = ibu::all();
        return view('dataibu')->with('ibus', $ibus);
    }
    public function store2(Request $request)
    {
        $validatedData = $request->validate([
            // 'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            'nama_acara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'no_hp' => 'required',
            'keterangan' => 'required',
        ]);
        // if ($request->hasFile('gambar')) {
        //     $gambar = $request->file('gambar');
        //     $namaGambar = time() . '_' . $gambar->getClientOriginalName();
        //     $path = public_path('asset/img/' . $namaGambar);

        //     $gambar->move(public_path('asset/img'), $namaGambar);

        //     $validatedData['gambar'] = $namaGambar;
        // }





        // Simpan data anak ke database
        ibu::create($validatedData);

        // Redirect atau kembalikan respon yang sesuai
        return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
    }
    public function show1($id)
    {
        $ibu = ibu::findOrFail($id);
        return view('ibu.show', compact('ibu'));
    }
    public function edit1($id)
    {
        $ibu = ibu::findOrFail($id);
        return view('dataibu', compact('ibu'));
    }

    public function update1(Request $request, $id)
    {
        $ibu = ibu::findOrFail($id);
        $ibu->nama_acara = $request->input('nama_acara');
        $ibu->tanggal = $request->input('tanggal');
        $ibu->lokasi = $request->input('lokasi');
        $ibu->status = $request->input('status');
        $ibu->no_hp = $request->input('no_hp');
        $ibu->keterangan = $request->input('keterangan');

        $ibu->save();

        return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
    }

    public function destroy1($id)
    {
        $ibu = ibu::findOrFail($id);
        $ibu->delete();

        return redirect()->back()->with('success', 'Ibu berhasil dihapus');
    }
}
