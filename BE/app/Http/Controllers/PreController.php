<?php

namespace App\Http\Controllers;

use App\Models\Pre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PreController extends Controller
{
    function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => ['required']
            
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, $validator->messages()]);
        }

        if(DB::table('pres')->where('mobile' , $request->mobile)->exists()){
            return response()->json(['status'=>false , 'message'=>'already registered!']);
        }

        $user = Pre::create([
            'mobile' => $request->mobile
        ]);
        if ($user) {
            return response()->json(['status' => true, 'message' => 'ثبت نام انجام شد']);
        } else {
            return response()->json(['status' => false, 'message' => 'fails']);
        }
    }
}
