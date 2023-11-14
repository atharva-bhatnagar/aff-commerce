<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(Request $request){
        $filename="";
        if($request->hasFile('image')){
            // $filename=$request->getSchemeAndHttpHost()."/assests/images".time().".".$request->image->extension();
            // $request->image->move(public_path('/assests/img'),$filename);
            $filename='public/assets/images/'.$request->image->getClientOriginalName();
            $request->image->move('public/assets/images/',$filename);
        }
        $product=Product::create([
            'image'=>$filename,
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'content'=>$request->content,
            'link'=>$request->link,
            'user_id'=>auth()->id()
            
        ]);
        return redirect('add');
    }
}
