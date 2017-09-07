<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technique;
use Illuminate\Support\Facades\Gate;

class TechniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techniques = Technique::all()->toArray();
        
        return view('techniques.index', compact('techniques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('techniques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $technique = new Technique([
          'name' => $request->get('name'),
          'category' => $request->get('category'),
          'subcategory' => $request->get('subcategory'),
          'level' => $request->get('level')
        ]);

        $technique->save();
        return redirect('/techniques');
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
        $technique = Technique::find($id);
        
        return view('techniques.edit', compact('technique','id'));
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
        $technique = Technique::find($id);
        $technique->name = $request->get('name');
        $technique->category = $request->get('category');
        $technique->subcategory = $request->get('subcategory');
        $technique->level = $request->get('level');
        $technique->save();
        return redirect('/techniques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technique = Technique::find($id);
        $technique->delete();

        return redirect('/techniques');
    }
}
