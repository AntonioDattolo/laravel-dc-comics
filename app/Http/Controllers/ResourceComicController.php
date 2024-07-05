<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ResourceComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data =[ "comics" => Comic::all()];
        return view("index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dump($data);
        
        // Creo un nuovo Game e ne scrivo i dati
        $newRecord = new Comic;
        $newRecord->title = $data["title"];
        $newRecord->description = $data["description"];
        $newRecord->thumb = $data["thumb"];
        $newRecord->price = $data["price"];
        $newRecord->series = $data["series"];
        $newRecord->sale_date = $data["sale_date"];
        $newRecord->type =$data["type"];
        $newRecord->artist = $data ["artists"];
        $newRecord->writers =  $data["writers"];
        $newRecord->save();
                 
        // redireziono sulla pagina che mostra i dettagli del gioco
        return redirect()->route('index.show', $newRecord->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selectedComic =  Comic::findOrFail($id);
        $data =[
            "comic" => $selectedComic
        ];
        return view("show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {    $selectedComic =  Comic::findOrFail($id);
        $data =[
            "comic" => $selectedComic
        ];
        return view("edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
