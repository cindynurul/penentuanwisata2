<?php

namespace App\Http\Controllers;

use Session;
use App\Models\artikel;
use Str;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'konten' => 'required'
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $slug = Str::slug($artikel->judul);
        $artikel->slug = $slug;
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('front/images/cover/', $name);
            $artikel->cover = $name;
        }
        $artikel->konten = $request->konten;
        $artikel->save();
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil Menyimpan $artikel->judul"
                        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          // Validasi data
          $validated = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $slug = Str::slug($artikel->judul);
        $artikel->slug = $slug;
        $artikel->konten = $request->konten;
        $artikel->save();
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil Menyimpan $artikel->judul"
                        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}