<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view("backoffice.gallery.all", compact("gallery"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "img"=>['required'],
        ]);
        $gallery = new Gallery();
        $gallery->img = $request->file("img")->hashName();
        $gallery->save();
        $request->file("img")->storePublicly("img", "public");
        return redirect()->route("gallery.index")->with("message", "Done! ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view("backoffice.gallery.show", compact("gallery"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view("backoffice.gallery.edit", compact("gallery"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            "img"=>['required'],
        ]);
    
        Storage::disk("public")->delete("img/" . $gallery->img);
        $gallery->img = $request->file("img")->hashName();
        $gallery->save();
        $request->file("img")->storePublicly("img", "public");
        return redirect()->route("gallery.index")->with("message", "Done! ");
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete("img/" .  $gallery->img);
        $gallery->delete();
        return redirect()->route("gallery.index");
    }
}
