<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StepOneTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StepOneTwoController extends Controller
{
public function addData(Request $request){
    $validator = Validator::make($request->all(), [
        'project_name' => 'required',
        'project_description' => 'required',
        'client' => 'required',
        'contractor' => 'required',
        'max_x' => 'required',
        'min_x' => 'required',
        'max_y' => 'required',
        'min_y' => 'required',
        'max_z' => 'required',
        'min_z' => 'required',

    ]);

    if ($validator->fails()) {
        return response()->json([
            'validation_errors' => "something went wrong",
        ]);
    } else {
        $data = StepOneTwo::create([
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'client' => $request->client,
            'contractor' => $request->contractor,
            'max_x' => $request->max_x,
            'min_x' => $request->min_x,
            'max_y' => $request->max_y,
            'min_y' => $request->min_y,
            'max_z' => $request->max_z,
            'min_z' => $request->min_z,

        ]);
}
return response()->json([
    'status' => 200,
    'data' => $data,
    'message' => 'data added successfully',
]);
}


public function getData(){

    $result= StepOneTwo::orderBy('id', 'desc')->get();
    return response()->json([
        'status' => 200,
        'message' => 'Data retrive successfully',
        'data' => $result,
    ]);

}



}
