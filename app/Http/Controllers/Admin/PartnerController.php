<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
        public function index(Request $request){

           $items = Partners::select('image','name','id');
           if ($request->ajax()){
               if ($request->has('search') && $request->input('search') !=null){
                    $items->where('name','=',$request->input('search'));
               }
               $items =$items->paginate(20) ;
               return view('admin.partner.paginate',compact('items'));
           }
            $items =$items->paginate(20) ;
            return view('admin.partner.index',compact('items'));
        }
        public function create(Request $request){
            $request->validate([
                'name'=>'required',
                'image'=>'required|mimes:png,jpeg,jpg,gif'
            ]);
            $item = new Partners();
            $image =  $request->file('image');
            $imageName = time().".".$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/'),$imageName);
            $item->image  =$imageName;
            $item->name  =$request->input('name');
            $save= $item->save();
            if ($save){
                return response()->json(['status'=>true,'message'=>'تمت العملية بنجاح']);
            }else{
                return response()->json(['status'=>false,'message'=>'لم تتم العملية']);
            }
        }
        public function edit(Request $request){
            try
            {
                $id = $request->input('id');
                $item = Partners::findOrFail($id);
                return  response()->json(['status'=>true,'data'=>$item]);
            }
            catch (ModelNotFoundException $exception){
                return  response()->json(['status'=>true,'message'=>"العنصر غير موجود"]);
            }
        }
    public function update(Request $request){
        $validation =[
            'name'=>'required',
        ];
        if ($request->hasFile('image')){
            $validation +=['image'=>'mimes:jpeg,png,jpg',];
        }
        $request->validate($validation);
        try {
            $id = $request->input('id');
            $item = Partners::findOrFail($id);
            $item->name= $request->input('name');
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
                return response()->json(['status'=>true,'message'=>"تمت العملية بنجاح"]);
            }else{
                return response()->json(['status'=>false,'message'=>'لم تتم العملية']);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status'=>false,'message'=>'العنصر غير موجود']);
        }
    }
    public function delete(Request $request){
        try{
            $id = $request->input('id');
            $item = Partners::findOrFail($id);
            $delete = $item->delete();
            if ($delete) {
                return response()->json(['status' => true, 'message' => "تمت العملية بنجاح"]);
            }
            else {
                return response()->json(['status' => false, 'message' => 'لم تتم العملية']);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status' => false, 'message' => 'تمت العملية']);
        }
    }
}
