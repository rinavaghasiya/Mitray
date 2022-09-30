<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use App\Product;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;

class ProductController extends Controller
{

    public function product(Request $request)
    {
      //   $requestData = ['cid', 'title', 'price'];
      // $search = $request->input('search');
      // $data = DB::table('category')
      //  ->join('product','product.cid', '=','category.id')
      //   ->where(function ($q) use ($requestData, $search) {
      //     foreach ($requestData as $field)
      //       $q->orWhere($field, 'like', "%{$search}%");
      //   })
      //   ->Paginate(5);

        // echo"<pre>";
        // print_r($search);
        // die();

      $data = DB::table('category')
      ->join('product','product.cid', '=','category.id')
      ->get();

        return view('admin.product')->with(['data' => $data]);
    }

    public function addproduct()
    {
        $data=DB::table('category')->get();
        return view('admin.addproduct')->with(['data'=>$data]);
    }

    public function insertproduct(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view('admin.addproduct');
        }
        else
        {
            $data=$request->all();
            $img=array();
            if($files=$request->file('img'))
            {
              foreach($files as $file)
              {
                $name=$file->getClientOriginalName();
                $t=time().$name;
                $img = explode(".",$t);

               $file->move(public_path('item_img'),$t );
                $image[]=$t;
              }
            }
              if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
              {
              $ans=DB::table('product')->insert(["cid"=>$data['cname'],"title"=>$data['title'],"price"=>$data['price'],"description"=>$data['description'],"pimage"=>implode(",",$image)]);
              return redirect()->back()->with("message","Insert Sucessfully...");
              }
              else
             {
               return redirect()->back()->with('error','Invalid Image Type');
             }
        }
    }


    public function show(Request $request)
    {
      $requestData = ['id', 'cid', 'title', 'price'];
      $search = $request->input('search');
      $data = DB::table('product')
        // ->where('cname','LIKE','%'.$search.'%')
        ->where(function ($q) use ($requestData, $search) {
          foreach ($requestData as $field)
            $q->orWhere($field, 'like', "%{$search}%");
        })
        ->Paginate(5);
      //   echo"<pre>";
      //   print_r($search);
      //   die();
      return view('admin.product')->with(['data' => $data, "search" => $search]);
    }



    public function editproduct(Request $request, $id)
  {
    $data=DB::table('category')->get();
    $product = DB::table('product')->where('id', $id)->first();
      // echo"<pre>";
      //   print_r($product);
      //   die();
    return view('admin.editproduct')->with(['product'=> $product,'data'=>$data]);
  }


  public function editdata(Request $request)
  {
    $time = date('Y-m-d H:i:s', time());
    $data = $request->all();
    if (@$data['img'] != '') {
      $img = array();
      if ($files = $request->file('img')) {
        foreach ($files as $file) {
          $name = $file->getClientOriginalName();
          $img = explode(".", $name);
          $t = time() . "." . $img[1];
          if ($img[1] == 'png' ||  $img[1] == "jpg" ||  $img[1] == "jpeg") {
            $file->move(base_path('public/item_img'), $t);
            DB::table('product')->where('id', $data['id'])->update(["cid" => $data['cname'], "title" => $data['title'],"price" => $data['price'], "description" => $data['description'],  "pimage" => $t, 'updated_at' => $time]);

            $photo = $request->input('oldimg');

            if ($photo != '') {
              if (file_exists('item_img/' . $photo)) {
                unlink('item_img/' . $photo);
              } else {
                echo "file not exist";
              }
            }
          } else {
            return redirect()->back()->with('error', 'Invalid Image Type');
          }
        }
        return redirect()->back()->with('message', 'Update Product Sucessfully!');
      }
    } else {
      DB::table('product')->where('id', $data['id'])->update(["cid" => $data['cname'], "title" => $data['title'],"price" => $data['price'], "description" => $data['description'], 'updated_at' => $time]);

      return redirect()->back()->with('message', 'Update Product Sucessfully!');
    }
  }


  public function deleteproduct(Request $request, $id)
    {
        $data = DB::table('product')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Delete Product Succesfully');
    }


  public  function addimage(Request $request,$id)
  {
    $data=DB::table('product')->where('id',$id)->first();
    return view('admin.addextraimage')->with(['data'=>$data]);
  }


  public function addimagedetail(Request $request)
  {
    $data = $request->all();

    if (@$request->file('productimg') != '') {
      if ($request->hasFile('productimg')) {
        $poster = $request->file('productimg');
        $pname = $poster->getClientOriginalName();
        $pimage = time() . $pname;
        $poster->move(public_path('productimg'), $pimage);
      }

      $ans = DB::table('product_image')->insert(['pid' => $data['pid'], "productimg" => $pimage]);
      return redirect()->back()->with('message', 'Insert Data Sucessfully!');
    } else {
      return redirect()->back()->with('error', 'please select photo');
    }
  }


  public  function editimage(Request $request,$id)
  {
    $data=DB::table('product_image')->where('id',$id)->first();
    return view('admin.editproductimage')->with(['data'=>$data]);
  }

  public function editproductimage(Request $request)
  {
      $data = $request->all();

      if(@$data['img']!='')
    {
        $name = $data['img']->getClientOriginalName();
        $t=time().$name;
        $img = explode(".",$name);
        if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
        {
            $data['img']->move(base_path('public/productimg'),$t );
            DB::table('product_image')->where('id', $data['id'])->update(["pid" => $data['pid'], 'productimg' => $t]);
            
           $photo = $request->input('oldimg');
            if($photo!='')
            {
              if(file_exists('productimg/'.$photo))
              {
                unlink('productimg/'.$photo);
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
          DB::table('product_image')->where('id', $data['id'])->update(["pid" => $data['pid']]);
          return redirect()->back()->with('message','Update Successfully');
      }
  }

  public function showproductimage(Request $request)
  {
    $data = DB::table('product_image')->get();
    return view('admin.productimage')->with(['data' => $data]);
  }

  public function deleteimage($id) 
  {
      $image= DB::table('product_image')->where("id",$id)->pluck("productimg")->toArray();
     if($image[0]!='')
     {
       if(file_exists('productimg/'.$image[0]))
       {
       
         DB::table('product_image')->where('id',$id)->delete();

         unlink('productimg/'.$image[0]);
          return redirect()->back()->with('message','Delete  Successfully!');
       }
       else
       {
          echo "file not exist";
       } 

    }
   }


   public function downloadPDF(Request $request){
    // $user = Product::find($id);
    $customPaper = array(0,0,720,841.89);
    $data = DB::table('category')
      ->join('product','product.cid', '=','category.id')
      // ->where('product.id','=',$id)
      ->get();

     

    $pdf = PDF::loadView('admin/pdf', compact('data'))->setPaper($customPaper, 'portrait');
    return $pdf->download('shopping.pdf');

  }

  public function exportExcelCSV($slug) 
  {
    
      return Excel::download(new UsersExport, 'users.'.$slug);
  }

}


