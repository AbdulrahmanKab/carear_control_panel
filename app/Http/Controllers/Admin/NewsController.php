<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request){
            $items = News::select(['id','title','sub_description','image']);
            if($request->has("search") &&$request->input('search') !=null ){
                $items = $items->where('title','like',$request->input('search'))->Orwhere('sub_description');
            }
          $items=$items->paginate(20);
        
        if ($request->ajax()){
            return view('admin.news.paginate',compact('items'))->render();
        }
        return view('admin.news.index',compact('items'));
    }
    
    
    public function show($id){
        try
        {
            $item = News::findOrFail($id);
            return  response()->json(['status'=>true,'data'=>$item]);
        }catch (ModelNotFoundException $exception){
            return "not found";
        }
    }
    public function create(Request $request){

        $request->validate([
            'image'=>'required|mimes:jpeg,png,jpg',
            'title'=>'required',
            'description'=>'required'
        ]);
        $news = new News();
        $image = $request->file('image');
        $imageName  = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('/uploads/'),$imageName);
        $news->image= $imageName;
        $news->title = $request->input('title');
        $news->sub_description =$request->input("sub_description");
       $news->description = $request->input('description');
       $news->lang = $request->input('lang');
        $save=$news->save();
        if ($save){
            return response()->json(['status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
   }
   public function delete($id){
       $item = News::findOrFail($id);
       $delete =  $item->delete();
       if ($delete){
           return response()->json(['status'=>true]);
       }else{
           return response()->json(['status'=>false]);
       }
   }
   public function update(Request $request,$id){
        $validation =[
            'title'=>'required',
            'description'=>'required'
        ];
       if ($request->hasFile('image')){
        $validation +=['image'=>'required|mimes:jpeg,png,jpg',];
       }
       $request->validate($validation);
       try {
           $item = News::findOrFail($id);
           $item->title= $request->input('title');
           $item->sub_description= $request->input('sub_description');
           if ($request->hasFile('image')){
               if (\File::exists(public_path("/uploads/".$item->image))){
                   \File::delete(public_path("/uploads/".$item->image));
               }
               $image =$request->file('image');
               $imageName  = time().".".$image->getClientOriginalExtension();
               $image->move(public_path('/uploads/'),$imageName);
               $item->image = $imageName;

           }
           $item->description = $request->input('description');
           $item->lang = $request->input('lang');
           $update=   $item->update();
           if ($update){
               return response()->json(['status'=>true]);
           }else{
               return response()->json(['status'=>false]);
           }
       }catch (ModelNotFoundException $exception){
           return response()->json(['status'=>false]);
       }
   }
}
