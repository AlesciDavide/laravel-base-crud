<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();

        return view('pages.index', compact("animals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->except('_token');

        $newAnimal = new Animal($data);

        /* dd($newAnimal); */

        /*  $newAnimal = new Animal($data);
        $newAnimal->nome = $data['nome'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->razza = $data['razza'];
        $newAnimal->eta = $data['eta'];
        $newAnimal->sesso = $data['sesso'];
        $newAnimal->colore = $data['colore'];
        $newAnimal->peso = $data['peso'];
        $newAnimal->altezza = $data['altezza'];
        $newAnimal->url_img = $data['url_img'];
        $newAnimal->info = $data['info']; */

        $newAnimal->save();
        return redirect()->route('pages.show', ['animal' => $newAnimal->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {

        return view('pages.show', compact("animal"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('pages.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->except('_token');



        /* dd($data); */
/*
        $newAnimal = new Animal($data);
        $newAnimal->nome = $data['nome'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->razza = $data['razza'];
        $newAnimal->eta = $data['eta'];
        $newAnimal->sesso = $data['sesso'];
        $newAnimal->colore = $data['colore'];
        $newAnimal->peso = $data['peso'];
        $newAnimal->altezza = $data['altezza'];
        $newAnimal->url_img = $data['url_img'];
        $newAnimal->info = $data['info'];
        $animal->update(); */

        $animal->update($data);
        return redirect()->route('pages.show', ['animal' => $animal->id])->with('message', $animal->name . "è stato modificato con successo!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
