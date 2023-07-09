<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function dataEvent()
    {
        $events = Event::all();
        return view('event')->with('events', $events);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_acara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'no_hp' => 'required',
            'keterangan' => 'required',
        ]);

        Event::create($validatedData);

        return redirect()->back()->with('success', 'Data acara berhasil disimpan.');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->nama_acara = $request->input('nama_acara');
        $event->tanggal = $request->input('tanggal');
        $event->lokasi = $request->input('lokasi');
        $event->status = $request->input('status');
        $event->no_hp = $request->input('no_hp');
        $event->keterangan = $request->input('keterangan');

        $event->save();

        return redirect()->back()->with('success', 'Data acara berhasil disimpan.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Acara berhasil dihapus.');
    }
}
