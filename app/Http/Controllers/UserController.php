<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function candidateslist()
    {
        try {
            $record = User::where('parent', 0)->get(); 
            return response()->json(['status' => true, 'data' => $record, 'message' => ' candidateslist succesfully show'], 201);
        } catch (\Exception $error) {
            return response()->json(['message' => 'somthing want wrong!']);
        }
    }

    public function candidateschildren(Request $request)
    {
        // dd($request->id);
        try {
           $id = $request->id;
           $record['candidate'] = User::where('id', $id)->get();
           $record['candidateschildren'] = User::where('parent', $id)->get();

            return response()->json(['status' => true, 'data' => $record, 'message' => 'candidateschildren list succesfully show'], 201);
        } catch (\Exception $error) {
            return response()->json(['message' => 'somthing want wrong!']);
        }
    }
}
