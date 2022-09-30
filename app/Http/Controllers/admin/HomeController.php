<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function login()
   {
       return view('admin.login');
   }
   public function addcatagory()
   {
       return view('admin.addcatagory');
   }
  

   public function dashbord()
   {
       return view('admin.dashbord');
   }
   
   public function profile()
   {
       return view('admin.profile');
   }

  
   public function deletecontact(Request $request, $id)
    {
        $data = DB::table('contact')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }

}
