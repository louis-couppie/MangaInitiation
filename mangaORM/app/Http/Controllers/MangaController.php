<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use App\Http\Requests\InsertMangaRequest;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Manga::all();
        return view('index', compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertMangaRequest $request)
    {
        //
        Manga::create($request->all());
        return view('confirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function show(Manga $manga)
    {
        return view('manga', compact('manga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function edit(Manga $manga)
    {
        //
        return view('edit', compact('manga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function update(InsertMangaRequest $request, Manga $manga)
    {
        //
        $manga->update($request->all());
        return back()->with('info','le manga a bien été modifié dans la base de données');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manga $manga)
    {
        $manga -> delete();
        return back()->with('info','le manga a bien été suprimé de la base de données');
    }
}
