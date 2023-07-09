<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function datakonser()
    {
        $concerts = Concert::all();
        return view('concert')->with('concerts', $concerts);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_konser' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'penyanyi' => 'required',
            'harga_tiket' => 'required',
        ]);

        Concert::create($validatedData);

        return redirect()->back()->with('success', 'Data konser berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $concert = Concert::findOrFail($id);
        $concert->nama_konser = $request->input('nama_konser');
        $concert->tanggal = $request->input('tanggal');
        $concert->lokasi = $request->input('lokasi');
        $concert->penyanyi = $request->input('penyanyi');
        $concert->harga_tiket = $request->input('harga_tiket');

        $concert->save();

        return redirect()->back()->with('success', 'Data konser berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $concert = Concert::findOrFail($id);
        $concert->delete();

        return redirect()->back()->with('success', 'Konser berhasil dihapus.');
    }
}
