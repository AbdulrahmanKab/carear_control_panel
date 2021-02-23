<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        $items = Courses::select(['title', 'content', 'file','id'])->paginate(20);
        if ($request->ajax()){
            return view('admin.courses.paginate', compact('items'));
        }

        return view('admin.courses.index', compact('items'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'=>'required',
            "course_type"=>'required'
        ]);

        $item = new Courses();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path("/uploads/"), $fileName);
            $item->file = $fileName;
        }
        $item->title = $request->input('title');
        $item->content = $request->input('description');
       $save= $item->save();
        if ($save){
            return response()->json(['status'=>true,'message'=>'تمت العملية بنجاح']);
        }else{
            return response()->json(['status'=>false,'message'=>'لم تتم العملية']);
        }
    }
    public function edit($id){
        try
        {
            $item = Courses::findOrFail($id);
            return  response()->json(['status'=>true,'data'=>$item]);
        }catch (ModelNotFoundException $exception){
            return response()->json(['status'=>false,'message'=>'العنصر غير موجود']);
        }
    }
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',

        ]);
        try{
            $item = Courses::findOrFail($id);
            $item->title = $request->input('title');
            $item->content = $request->input('description');
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . "." . $file->getClientOriginalExtension();
                $file->move(public_path("/uploads/"), $fileName);
                $item->file = $fileName;
            }
            $update = $item->update();
            if ($update) {
                return response()->json(['status' => true,'message'=>'تمت العملية بنجاح']);
            } else {
                return response()->json(['status' => false,'message'=>'لم تتم العملية']);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status' => false,'message'=>'العنصر غير موجود']);
        }
    }
    public function delete($id){
        try{
            $item = Courses::findOrFail($id);
            $delete = $item->delete();
            if ($delete) {
                return response()->json(['status' => true,'message'=>'تمت العملية بنجاح']);
            } else {
                return response()->json(['status' => false,'message'=>'لم تتم العملية']);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status' => false,'message'=>'العنصر غير موجود']);
        }
    }
}
