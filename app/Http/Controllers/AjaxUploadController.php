<?php

namespace App\Http\Controllers;

use App\ResimYukleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AjaxUploadController extends Controller
{
    public function index()
    {
        $resimler = ResimYukleModel::all();
        return view('ajaxImageUpload',compact('resimler'));
    }

    public function action(Request $request)
    {

     if (request()->hasFile('select_file'))
     {

      $image = $request->file('select_file');
      $new_name = "XL". rand() . '.' . $image->getClientOriginalExtension();
      
      if($image->isValid())
            {
                $image->move('images/',$new_name);
                ResimYukleModel::create([
                    'title' => 'sa',
                    'image' => $new_name
                    ]);
            }
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="200" />',
       'class_name'  => 'alert-success',
       'buton' => '<button class="btn btn-danger btn-xs" style="width: 100%">Kaldır</button>'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }
}
?>