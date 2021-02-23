<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemConstants;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(){
        return view('admin.system.index');
    }
    public function getConstant(){
        $system= SystemConstants::where('type','system_constants')->get();
        return response()->json(['status'=>true,'data'=>$system]);
    }
    public function saveConstant(Request $request){


        $request->validate([
            'name_ar'=>"required",
            'name_en'=>"required",
        ]);
        $system_value = SystemConstants::where('type',$request->input('system_constant'))->get();
        $number=$system_value->count();
        $number = ++$number;
        $system_isnert = new SystemConstants();
        $system_isnert->value = $number;
        $system_isnert->type = $request->input('system_constant');
        $system_isnert->name_ar = $request->input('name_ar');
        $system_isnert->name_en = $request->input('name_en');
        $system_isnert->order =$number;
        $system_isnert->status =1;
        $system_isnert->save();
        return response()->json(['status'=>true,'message'=>'تمت العملية بنجاح']);
    }
    public function getType(){
        $courses = SystemConstants::where('type','like',"courses_type")
            ->select('name_en','name_ar','value')->get();
        return response()->json([
            'status'=>true,
            "data"=>$courses
        ]);
    }

}
