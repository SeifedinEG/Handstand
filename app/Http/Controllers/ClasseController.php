<?php

namespace App\Http\Controllers;

use App\Mail\ClasseMail;
use App\Models\Classe;
use App\Models\Mail;
use App\Models\Newsletter;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Storage;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe = Classe::all();
        return view("backoffice.class.all", compact("classe"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainer = Trainer::all();
        $newClasse = Newsletter::all();

        return view("backoffice.class.create", compact("trainer", "newClasse"));
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
            "name"=>['required'],
            "categorie"=>['required'],
            "schedule"=>['required'],
            "trainer_id"=>['required']
        ]);

        $classe = new Classe();
        Storage::disk("public")->delete("img/"  . $classe->img);
        $classe->img = $request->file("img")->hashName();
        $classe->trainer_id = $request->trainer_id;
        $classe->name = $request->name;
        $classe->categorie = $request->categorie;
        $classe->schedule = $request->schedule;
        $classe->save();

        $newClasse = Newsletter::all();
        foreach($newClasse as $item){
            FacadesMail::to($item->email)->send(new ClasseMail());
        }       

        $request->file("img")->storePublicly("img", "public");

        return redirect()->route("classe.index")->with("message", "Done!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        $trainer = Trainer::all();
        return view("backoffice.class.edit", compact("trainer", "classe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            "img"=>['required'],
            "name"=>['required'],
            "categorie"=>['required'],
            "schedule"=>['required'],
            "trainer_id"=>['required']
        ]);

        Storage::disk("public")->delete("img/"  . $classe->img);
        $classe->img = $request->file("img")->hashName();
        $classe->trainer_id = $request->trainer_id;
        $classe->categorie = $request->categorie;
        $classe->name = $request->name;
        $classe->schedule = $request->schedule;
        $classe->save();


        $request->file("img")->storePublicly("img", "public");

        return redirect()->route("classe.index")->with("message", "Done! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        Storage::disk('public')->delete("img/" .  $classe->img);
        $classe->delete();
        return redirect()->route("classe.index");
    }
}
