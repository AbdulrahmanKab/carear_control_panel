<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
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
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
    public function edit($id){
        try
        {
            $item = Courses::findOrFail($id);
            return  response()->json(['status'=>true,'data'=>$item]);
        }catch (ModelNotFoundException $exception){
            return "not found";
        }
    }
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',

        ]);
        $item =  Courses::findOrFail($id);
        $item->title = $request->input('title');
        $item->content = $request->input('description');
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path("/uploads/"), $fileName);
            $item->file = $fileName;
        }
        $update = $item->update();
        if ($update){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
    public function delete($id){
        $item = Courses::findOrFail($id);
        $delete =  $item->delete();
        if ($delete){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
}
