<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hbf;

class HbfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display All Hbf
        $hbf = Hbf::all();

        return view('hbf.index', compact('hbf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hbf.create');

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
      $hbf = new Hbf([
        'name' => $request->get('name'),
      ]);
      $hbf->save();
      return redirect('/hbf')->with('success', 'New HBF has been added');
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
        $hbf = Hbf::find($id);

        return view('hbf.edit', compact('hbf'));
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
        // Updating Hbf
        $request->validate([
       'name'=>'required',

     ]);

     $hbf = Hbf::find($id);
     $hbf->name = $request->get('name');
     $hbf->save();

     return redirect('/hbf')->with('success', 'Hbf has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deleting Hbf
        $hbf = hbf::find($id);
        $hbf->delete();

     return redirect('/hbf')->with('success', 'HBF has been deleted Successfully');
    }
}
