<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request){
            $content = Messages::OrderBy("id",'desc')->paginate(20);
        if ($request->ajax()){
            return view('admin.message.paginate',compact('content'));
        }

        return view('admin.message.index',compact('content'));
    }
    public function delete($id){
        try{
            $content = Messages::findOrFail($id);

            $delete = $content->delete();
            return response()->json(['status' => true]);

        }catch (ModelNotFoundException $exception){
            return response()->json(['status' => false]);
        }
    }
}
