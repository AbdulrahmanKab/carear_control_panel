<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Faker\Provider\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SliderContentController extends Controller
{
    public function index(Request $request){
            $sliders = Sliders::select(['id','title','link','image','status']);
        if ($request->has("search") &&$request->input('search') !=null ){
            $sliders= $sliders->where('title','like',"%".$request->input('search')."%");
        }
        $sliders = $sliders->paginate(20);
        if ($request->ajax()){
            return view('admin.slider.paginate',compact('sliders'))->render();
        }
        return view('admin.slider.index',compact('sliders'));
    }
    public function create(Request $request){

        $request->validate([
            'image'=>'required|mimes:jpeg,png,jpg',
            'link'=>'required',
            'title'=>'required'
        ]);

        $slider = new Sliders();
        $slider->link  = $request->input('link');
        $slider->title  = $request->input('title');
        $slider->status  = $request->input('status') =="1"?1:0;
        $image = $request->file('image');
        $imageName  = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('/uploads/'),$imageName);
        $slider->image = $imageName;
        $save =  $slider->save();
        if ($save){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
    public function show($id){
try
        {
            $item = Sliders::findOrFail($id);
            return  response()->json(['status'=>true,'data'=>$item]);
        }catch (ModelNotFoundException $exception){
        return "not found";
    }

    }
    public function delete($id){
        $item = Sliders::findOrFail($id);
       $delete =  $item->delete();
        if ($delete){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
    public function update(Request $request,$id){
            $validation = [
                'link'=>'required',
                'title'=>'required'
            ];
            if($request->hasFile('image')){
            $validation+=['image'=>'required|mimes:jpeg,png,jpg'];
            }
        $request->validate($validation);
        try {
            $item = Sliders::findOrFail($id);
            $item->link= $request->input('link');
            $item->title= $request->input('title');
            $item->status  = $request->input('status') =="1"?1:0;
            if ($request->hasFile('image')){
                if (\File::exists(public_path("/uploads/".$item->image))){
                    \File::delete(public_path("/uploads/".$item->image));
                }
                $image =$request->file('image');
                $imageName  = time().".".$image->getClientOriginalExtension();
                $image->move(public_path('/uploads/'),$imageName);
                $item->image = $imageName;

            }
            $update=   $item->update();
            if ($update){
                return response()->json(['status'=>true,'message'=>'تمت العملية بنجاح']);
            }else{
                return response()->json(['status'=>false,'message'=>"لم تتم العملية"]);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status'=>false,'message'=>"العنصر غير موجود"]);
        }


    }
}
