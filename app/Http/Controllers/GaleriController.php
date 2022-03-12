<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Galeri;
use App\Models\Wisata;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisata = Wisata::all();
        return view('admin.galeri.create', compact('wisata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galeri = new Galeri;
        $galeri->id_wisata = $request->id_wisata;
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('front/images/galeri/', $name);
            $galeri->gambar = $name;
        }
        $galeri->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        $wisata = Wisata::all();
        return view('admin.galeri.edit', compact('galeri', 'wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $galeri = Galeri::findOrFail($id);
            $galeri->id_wisata = $request->id_wisata;
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $name = rand(1000, 9999) . $image->getClientOriginalName();
                $image->move('image/galeri/', $name);
                $galeri->gambar = $name;
            }
            $galeri->save();
            Session::flash("flash_notification", [
                            "level"=>"success",
                            "message"=>"Berhasil Menyimpan $galeri->nama_wisata"
                            ]);
            return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        Session::flash("flash_notification", [
                        "level"=>"success",
                        "message"=>"Berhasil Menghapus $galeri->nama_wisata"
                        ]);
        return redirect()->route('galeri.index');
    }
}
