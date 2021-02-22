<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request){
            $items = Services::select(['id','title','description','icons'])->paginate(20);
        if ($request->ajax()){
            return view('admin.services.paginate',compact('items'))->render();
        }

        return view('admin.services.index',compact('items'));
    }
    public function create(Request $request){
      $request->validate([
          'title'=>'required',
          'description'=>'required',
          "icons"=>'required'
      ]);
      $services  =new Services();
      $services->title = $request->input('title');
      $services->description = $request->input('description');
      $services->icons = $request->input('icons');
        $save = $services->save();
        if ($save){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }

    }
    public function show($id){
        try
        {
            $item = Services::findOrFail($id);
            return  response()->json(['status'=>true,'data'=>$item]);
        }catch (ModelNotFoundException $exception){
            return "not found";
        }
    }
    public function delete($id){
        try{
            $item = Services::findOrFail($id);
            $delete = $item->delete();
            if ($delete) {
                return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status' => false]);
        }
    }
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            "icons"=>'required'
        ]);
        $service =  Services::findOrFail($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->icons = $request->input('icons');
        $update = $service->update();
        if ($update){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
}
