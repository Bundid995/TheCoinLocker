<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Locker;
use App\Unit;


class LockerController extends Controller
{

    public function index()
    {
        $apioutput = array();
        $lockers = Locker::all();
        $apioutput = $this->generateJson($lockers);
        // return response()->json($apioutput, 200);  

        return response()->json($lockers, 200);
   
    }


    // public function getUnits(){

    //     $apioutput = array();
    //     $lockers = Unit::all();
    //     $apioutput = $this->generateJson($lockers);
    //     return response()->json($apioutput, 200);  
    // }

    private function generateJSON ($lockers)
    {
        $jsonoutput = array(); 
        foreach ($lockers as $lockers_index => $lockers_item) {
            $jsonoutput[$lockers_index] = array( 
                "ID" => $lockers_item->id,
                "Size" => $lockers_item->size,
                "Price" => $lockers_item->price,
                "units" => array(        
                    "unit_id" => $lockers_item->id, 
                    "unit_name" => $lockers_item->unit_name,       
                 )
                 
      
          );
        }
        return $jsonoutput;

    }



}
    
