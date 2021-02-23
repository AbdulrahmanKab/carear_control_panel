<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if (\Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')], $request->filled('remember'))) {
            return redirect('/admin/slider');
        }else{
            return;
        }
    }
}
