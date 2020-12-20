<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Traits\ProfileTrait;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    use ProfileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list1 = $this->fetch_();

        return view('profile.index',[
            'list1'=>$list1
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

      return view('profile.create');
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
        $this->createAction_();

        return redirect()->back()->with([
            'message'=>'New profile added'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $existingRecord = \App\Models\Profile::find($id);


        return view('profile.edit',[
            'data'=>$existingRecord
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->updateAction_($id);
        // return 'Saved';
        return redirect()->back()->with([
            'message'=>'Saved'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->removeAction_($id);
        // return 'Record removed';
        return redirect()->back()->with([
            'message'=>'Removed'
        ]);

    }
}
