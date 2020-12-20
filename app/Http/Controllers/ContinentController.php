<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Continent::all();

        return view('continent.index',[
            'list'=>$list
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('continent.create');
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
        $newRecord = new Continent;
        $newRecord->name = request('name');
        $newRecord->save();

        return redirect()->back()->with([
            'message'=>'New Continent Added.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function show(Continent $continent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $record = Continent::find($id);

        return view('continent.edit',[
            'data'=>$record
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $record = Continent::find($id);
        $record->name = request('name');
        $record->save();

        return redirect()->back()->with([
            'message'=>'Continent Saved.'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $record = Continent::find($id);
        $record->delete();
        return redirect()->back()->with([
            'message'=>'Record removed.'
        ]);
    }

}
