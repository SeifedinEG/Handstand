<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing = Pricing::all();
        return view("backoffice.pricing.all", compact("pricing"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        return view("backoffice.pricing.edit", compact("pricing"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        $request->validate([
            "name"=>['required'],
            "price"=>['required'],
            "text1"=>['required'],
            "text2"=>['required'],
            "text3"=>['required'],
            "text4"=>['required'],
        ]);

        $pricing->name = $request->name;
        $pricing->price = $request->price;
        $pricing->text1 = $request->text1;
        $pricing->text2 = $request->text2;
        $pricing->text3 = $request->text3;
        $pricing->text4 = $request->text4;

        $pricing->save();
        return redirect()->route("pricing.index")->with("message", "Done! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        //
    }
}
