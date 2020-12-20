<?php 
namespace App\Traits;

trait ProfileTrait{
  
    function createAction_(){
        $email = request('email');

        $checkDuplicate = \App\Models\Profile::where('email',$email)->exists(); 

        if ($checkDuplicate){
            return redirect()->back()->with([
                'message'=>'A profile with the email (' . $email . ') already exists!'
            ]);               
        }
        
        
        $newRecord = new \App\Models\Profile;
        
        $newRecord->name = request('name');
        $newRecord->email = request('email');
        $newRecord->gender = request('gender');
        $newRecord->address = request('address');

        $newRecord->save();

    }


    function updateAction_($id){
        $existingRecord = \App\Models\Profile::find($id);
        
        $existingRecord->name = request('name');
        $existingRecord->email = request('email');
        $existingRecord->gender = request('gender');
        $existingRecord->address = request('address');

        $existingRecord->save();
    }

    function removeAction_($id){
        $existingRecord = \App\Models\Profile::find($id);

        if (is_null($existingRecord)){
            return redirect()->back()->with([
                'message'=>'Already removed.'
            ]);
         }

        $existingRecord->delete();

    }

    function fetch_(){
        $records = \App\Models\Profile::all();
        return $records;
    }



}

