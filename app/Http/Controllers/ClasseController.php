<?php

namespace App\Http\Controllers;
use App\Classe;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display All Kids Classes
        $classe = Classe::all();

        return view('classe.index', compact('classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('classe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Registering New Hbf
      $request->validate([
      'name'=>'required',

    ]);
    $classe = new Classe([
      'name' => $request->get('name'),
    ]);
    $classe->save();
    return redirect('/classe')->with('success', 'New Class has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $classe = Classe::find($id);

        return view('classe.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Updating class
        $request->validate([
       'name'=>'required',

     ]);

     $classe =Classe::find($id);
     $classe->name = $request->get('name');
     $classe->save();

     return redirect('classe')->with('success', 'Class has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Deleting class
      $classe = Classe::find($id);
      $classe->delete();

   return redirect('/classe')->with('success', 'Classe has been deleted Successfully');
    }
}
