<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variation;
use App\Technique;

class VariationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $variations = Variation::with('technique')->get();
        
        return view('variations.index', compact('variations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $techniques = Technique::all();

        return view('variations.create', compact('techniques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $variation = new Variation([
          'name' => $request->get('name'),
          'technique_id' => $request->get('technique_id'),
        ]);

        $variation->save();
        return redirect('/variations');
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
        $variations = Variation::with('technique')->find($id);
        $techniques = Technique::all();
        
        return view('variations.edit', compact('variations','id','techniques'));
        
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
        $variation = Variation::find($id);
        $variation->name = $request->get('name');
        $variation->technique_id = $request->get('technique_id');
        $variation->save();
        return redirect('/variations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variation = Variation::find($id);
      $variation->delete();

      return redirect('/variations');
    }
}
