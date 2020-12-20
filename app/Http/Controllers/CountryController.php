<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $continent_id = request('continent_id');
        $list = Country::where('continent_id',$continent_id)->get();

        return view('country.index',[
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
        $continents = Continent::all();
        return view('country.create',[
            'continents'=>$continents
        ]);
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
        $newRecord = new Country;
        $newRecord->name = request('name');
        $newRecord->continent_id = request('continent_id');
        $newRecord->save();
        return redirect()->back()->with([
            'message'=>'New country added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Country::find($id);
        $continents = Continent::all();
        return view('country.edit',[
            'data'=>$data,
            'continents'=>$continents
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $record = Country::find($id);
        $record->name = request('name');
        $record->continent_id = request('continent_id');
        $record->save();
        return redirect()->back()->with([
            'message'=>'Country saved'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
