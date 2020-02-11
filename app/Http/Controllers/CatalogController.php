<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        return view('catalog.index')->with('arrayPeliculas', Movie::all());
    }

    public function getShow($id)
    {
        return view('catalog.show')->with('pelicula', Movie::findOrFail($id));
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
        return view('catalog.edit')->with('pelicula', Movie::findOrFail($id));
    }

    public function postCreate(Request $request){
        $p=new Movie;
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        //$p->rented = $pelicula['rented'];
        $p->synopsis = $request->input('synopsis');
        $p->save();
        return redirect('catalog');
    }
    public function putEdit($id , Request $request) {
        $p  = Movie::findOrFail( $id   );
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        //$p->rented = $pelicula['rented'];
        $p->synopsis = $request->input('synopsis');
        $p->save();        $p ->save();
        return redirect('catalog/show/'.$id);
    }

}
