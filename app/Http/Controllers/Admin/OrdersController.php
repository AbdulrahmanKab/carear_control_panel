<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index(Request $request){
        $items= DB::table("courses_order")->leftJoin('courses','courses.id','courses_order.course_id')
        ->leftJoin('users_web','courses_order.user_id','users_web.id')
            ->select(['courses_order.id as id','courses.title as courseName'
                ,'users_web.name as username','users_web.phone as phone','users_web.email as email'])->paginate(20);
        if ($request->ajax()){
        return view('admin.orders.paginate',compact('items'));

        }
        return view('admin.orders.index',compact('items'));
    }

    public function delete($id){
        try{
            $item = Orders::findOrFail($id);
            $delete = $item->delete();
            if ($delete) {
                return response()->json(['status' => true, 'message' => "تمت العملية بنجاح"]);
            } else {
                return response()->json(['status' => false, 'message' => 'لم تتم العملية']);
            }
        }catch (ModelNotFoundException $exception){
            return response()->json(['status' => false, 'message' => 'تمت العملية']);
        }
    }
}
