<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

use App\Category;
use App\Product;



class HomeController extends Controller
{
  public function register(Request $request)
  {
    if ($request->isMethod('get')) {
      return view('client.register');
    } else {
      $data = $request->all();

      $same = DB::table('login')->where('email', $data['email'])->count();
      if ($same > 0) {
        return redirect()->back()->with('error', 'Email Has been Exist...Please Enter Another Email');
      } else {
        if ($data['fname'] != '' && $data['lname'] != '' && $data['email'] != '' && $data['password'] != '') {

          $id = DB::table('login')->insertGetId(["fname" => $data['fname'], "lname" => $data['lname'], "email" => $data['email'], "password" => $data['password'], "role" => '1']);

          Session::flash('message', 'Registarion Successfully!.');
          return redirect('/');
        } else {
          return redirect()->back()->with('error', 'Please Fill All the Fileds');
        }
      }
    }
  }

  public function logins(Request $request)
  {
    $email = $request->Input('email');
    $password = $request->Input('password');

    $a = DB::table('login')->where(['email' => $email])->where(['login.role' => '1'])->first();
    $same = DB::table('login')->where(['email' => $email])->where(['login.role' => '1'])->count();

    $adminstore = DB::table('login')->where(['email' => $email])->where(['login.role' => '0'])->first();
    $same1 = DB::table('login')->where(['email' => $email])->where(['login.role' => '0'])->count();


    if (($email != " ") && ($password != " ")) {
      if ($same > 0) {
        Session::put('clientid', $a->id);
        Session::put('clientemail', $a->email);
        Session::put('clientfname', $a->fname);
        Session::put('clientlname', $a->lname);

        return redirect('/')->with(['a' => $a]);
      } elseif ($same1 > 0) {
        Session::put('adminid', $adminstore->id);
        Session::put('adminmail', $adminstore->email);
        Session::put('adminfname', $adminstore->fname);
        Session::put('adminlname', $adminstore->lname);

        return redirect('/')->with(['adminstore' => $adminstore]);
      } else {
        return redirect('login')->with('error', 'Email and Password has been wrong....');
      }
    } else {
      return redirect('login')->with('error', 'Email and Password Empty...');
    }
  }

  public function postpage($id)
  {
    $data = DB::table('category')
      ->join('product', 'product.cid', '=', 'category.id')
      ->where("category.cname", $id)
      ->get();
    return view("client.Lehengas")->with(['data' => $data]);
  }

  public function productdetail($imageid)
  {
    $data = DB::table('category')
      ->join('product', 'product.cid', '=', 'category.id')
      ->where("product.id", $imageid)
      ->first();
    $pdetail = DB::table('product')
      ->join('product_image', 'product_image.pid', '=', 'product.id')
      ->where("product.id", $imageid)
      ->select('product_image.productimg')
      ->get();
    return view('client.product-detail')->with(["data" => $data, 'pdetail' => $pdetail]);
  }

  public function clientlogout()
  {
    Session()->forget('clientid');
    Session()->forget('clientemail');
    Session()->forget('clientfname');
    Session()->forget('clientlname');

    return redirect("/");
  }
  public function adminlogout()
  {
    Session()->forget('adminid');
    Session()->forget('adminemail');
    Session()->forget('adminfname');
    Session()->forget('adminlname');

    return redirect("/");
  }
  public function addcontact(Request $request)
  {
    $data = $request->all();
    if ($data['name'] != '' && $data['email'] != '' && $data['mobile'] != '' && $data['comments'] != '') {
      $ans = DB::table('contact')->insert(["name" => $data['name'], "email" => $data['email'], "mobile" => $data['mobile'], "comments" => $data['comments']]);
      return redirect()->back()->with('message', 'Insert Data Sucessfully!');
    } else {
      return redirect()->back()->with('error', 'Please Fill All Fields');
    }
  }

  // public function productpg(Request $request)
  // {
  //     $productQuery = DB::table('product')
  //         ->join('category', 'category.id', '=', 'product.cid')
  //         ->select('category.cname', 'product.*');

  //     if ($request->sub_cat) {
  //         $productQuery->where("cid", $request->sub_cat);
  //     }
  //     $productData = $productQuery->get();
  //     return view("client.Lehengas")->with(['data' => $productData]);
  // }


}


