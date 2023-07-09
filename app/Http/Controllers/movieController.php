<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MovieController extends Controller
{
    public function dataMovie()
    {
        $movies = Movie::all();
        return view('movie')->with('movies', $movies);
    }

    public function store(Request $request)
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

        // Simpan data movie ke database
        Movie::create($validatedData);

        // Redirect atau kembalikan respon yang sesuai
        return redirect()->back()->with('success', 'Data movie berhasil disimpan.');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.edit', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->nama_acara = $request->input('nama_acara');
        $movie->tanggal = $request->input('tanggal');
        $movie->lokasi = $request->input('lokasi');
        $movie->status = $request->input('status');
        $movie->no_hp = $request->input('no_hp');
        $movie->keterangan = $request->input('keterangan');

        $movie->save();

        return redirect()->back()->with('success', 'Data movie berhasil disimpan.');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->back()->with('success', 'Movie berhasil dihapus');
    }
}
