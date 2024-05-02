<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('animal')->with('animal', Animals::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }


    public function store(Request $request){Animals::create($request -> all());

        return redirect(route('animal.index'));

    }




    public function show(Animals $animal)
    {
         return view('show')->with('animal', $animal);
        
    }


    public function edit(Animals $animal)
    {
            return view('edit')->with('animal', $animal);
    }


    public function update(Request $request, Animals $animal)
    {
        $animal->name = $request->name;
        $animal->save();
        return redirect(route('animal.index'));
    }


    public function destroy(Animals $animal)
{
    $animal->delete();
    return redirect(route('animal.index'))->with('success', 'Animal deletado com sucesso');
}

}