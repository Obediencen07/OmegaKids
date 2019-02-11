<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kids;

class KidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kids = Kids::all();

        return view('kids.index', compact('kids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kids.create');
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
        $request->validate([
        'lname'=>'required',
        'fname'=>'required',
        'gender'=>'required',
        'age'=> 'required|integer'

      ]);
      $kids = new Kids([
        'lname' => $request->get('lname'),
        'fname'=> $request->get('fname'),
        'gender'=> $request->get('gender'),
        'age'=> $request->get('age')
      ]);
      $kids->save();
      return redirect('/kids')->with('success', 'New Kid has been added');
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
        // Edit Kid Table
        $kids = Kids::find($id);

        return view('kids.edit', compact('kids'));
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
        $request->validate([
       'lname'=>'required',
       'fname'=> 'required',
       'age' => 'required|integer'
     ]);

     $kids = Kids::find($id);
     $kids->lname = $request->get('lname');
     $kids->fname = $request->get('fname');
     $kids->age = $request->get('age');
     $kids->save();

     return redirect('/kids')->with('success', 'Kid has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kids = Kids::find($id);
        $kids->delete();

     return redirect('/kids')->with('success', 'Kid has been deleted Successfully');
    }
}
