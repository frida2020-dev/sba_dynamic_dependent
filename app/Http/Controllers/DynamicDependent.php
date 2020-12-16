<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use DB;
use App\Models\Country;

class DynamicDependent extends Controller
{
// function show()
// {
//     {
//         $country = Country::all();

//         // echo "<pre>";

//         echo $country;
//     }
// }

    function index()
    {
        $country_list = Country::groupBy('country')->get();
                        

        return view('dynamic_dependent')->with('country_list',$country_list);
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        // $data = DB::table('countries')
        //         ->select('state')
        //         ->where($select, $value)
        //         ->groupBy('state')
        //         ->get();

        $data = Country::where( $select, $value )->groupBy($dependent)->get();
        //         ->get()

        $output = '<option value="">Select ' . ucfirst($dependent).'</option>';

        foreach ($data as $row) {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }

        echo $output;

    }
}