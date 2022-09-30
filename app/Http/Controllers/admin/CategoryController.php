<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function insertcategory(Request $request)
    {
        $data = $request->all();

        if ($request->isMethod('get')) {
            return view('admin.addcatagory');
        } else {

            $same = DB::table('category')->where('cname', $data['cname'])->count();
            if ($same > 0) {
                return redirect()->back()->with('error', 'exist');
            } else {
                $data = $request->all();

                if (@$data['img'] != '') {
                    $name = $data['img']->getClientOriginalName();
                    $img = explode(".", $name);
                   

                    if ($img[1] == 'png' ||  $img[1] == "jpg" ||  $img[1] == "jpeg") {
                        $t = time() . "." . $img[1];
                        $data['img']->move(public_path('item_img'), $t);
                        DB::table('category')->insert(["cname" => $data['cname'], "catimage" => $t]);
                        return redirect()->back()->with('message', 'Insert Category Successfully');
                    } else {
                        return redirect()->back()->with('error', 'Category Are Not Inserted');
                    }
                }
            }
        }
    }

    public function show(Request $request)
    {
        $requestData = ['id', 'cname'];
        $search = $request->input('search');
        $data = DB::table('category')
            ->where(function ($q) use ($requestData, $search) {
                foreach ($requestData as $field)
                    $q->orWhere($field, 'like', "%{$search}%");
            })
            ->Paginate(5);


        return view('admin.catagory')->with(['data' => $data, "search" => $search]);
    }


    public function editca(Request $request, $id)
    {
        $data = DB::table('category')->where('id', $id)->first();
        return view('admin.editcatagory')->with('data', $data);
    }

    public function editcatagory(Request $request)
    {
        $data = $request->all();

        if(@$data['img']!='')
      {
          $name = $data['img']->getClientOriginalName();
          $t=time().$name;
          $img = explode(".",$name);
          if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
          {
              $data['img']->move(base_path('public/item_img'),$t );
              DB::table('category')->where('id', $data['id'])->update(["cname" => $data['cname'], 'catimage' => $t]);
              
          	 $photo = $request->input('oldimg');
              if($photo!='')
              {
                if(file_exists('item_img/'.$photo))
                {
                  unlink('item_img/'.$photo);
                }
               return redirect()->back()->with('message','Update Successfully');
      	      }
          }  
          else
          {
               return redirect()->back()->with('error','Invalid Image Type');
          } 
       }
       else
        {
            DB::table('category')->where('id', $data['id'])->update(["cname" => $data['cname']]);
            return redirect()->back()->with('message','Update Successfully');
        }
    }

    public function deletecatagory(Request $request, $id)
    {
        $data = DB::table('category')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }













    // public function insertcategory(Request $request)
    // {
    //     $data = $request->all();

    //     if ($request->isMethod('get')) {
    //         return view('admin.addcatagory');
    //     } else {

    //         $same = DB::table('category')->where('cname', $data['cname'])->count();
    //         if ($same > 0) {
    //             return redirect()->back()->with('error', 'exist');
    //         } else {
    //             $img = array();
    //             if ($files = $request->file('img')) {
    //                 foreach ($files as $file) {
    //                     $name = $file->getClientOriginalName();
    //                     $t = time() . $name;
    //                     // $t=time().".".$name;
    //                     $img = explode(".", $t);

    //                     $file->move(public_path('item_img'), $t);
    //                     $image[] = $t;
    //                 }
    //             }

    //             if ($img[1] == 'png' ||  $img[1] == "jpg" ||  $img[1] == "jpeg") {

    //                 DB::table('category')->insert(["cname" => $data['cname'], "catimage" => implode(",", $image)]);
    //                 return redirect()->back()->with('message', 'Insert Category Successfully');
    //             } else {
    //                 return redirect()->back()->with('error', 'Category Are Not Inserted');
    //             }
    //         }
    //     }
    // }
}
