<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view("backoffice.testimonial.all", compact("testimonial"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.testimonial.create");
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
            "name"=>['required'],
            "job"=>['required'],
            "text"=>['required'],
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;
        $testimonial->text = $request->text;

        $testimonial->save();
        return redirect()->route("testimonial.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view("backoffice.testimonial.edit", compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {

        $request->validate([
            "name"=>['required'],
            "job"=>['required'],
            "text"=>['required'],
        ]);
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;
        $testimonial->text = $request->text;

        $testimonial->save();
        return redirect()->route("testimonial.index")->with("message", "Done! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route("testimonial.index");
    }
}
