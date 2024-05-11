<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
              'isEdit' => false,
                ];
       return view('cms.product.add',$data);
    }

    public function datatable()
    {
        $product = Product::get();
        return DataTables::collection($product)->toJson();
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;
        $item = Product::find($id);
        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';
            return response()->json($response, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $product         =   new Product;
        if($request->has('thumbnail'))
        {
            $image = Storage::disk('cms')->putfile('',$request->thumbnail);
            $product->thumbnail     =  $image; 
        }
        if($request->has('codes'))
        {
            $codes = Storage::disk('cms')->putfile('',$request->codes);
            $product->codes     =  $codes; 
        }
        if($request->has('video'))
        {
            $video = Storage::disk('cms')->putfile('',$request->video);
            $product->video         =  $video; 
        }
        $product->name          =   $request->name;
        $product->price         =   $request->price;
        $product->slug          =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $product->description   =   $request->description;
        $product->save();
        
        if($request->has('multi_images')){
            foreach($request->multi_images as $gallery_img){
                $product_gallery                =   new ProductImage;
                $product_gallery->product_id    =   $product->id;
                $imageName = Storage::disk('cms')->putFile('', $gallery_img);
                $product_gallery->image  =   $imageName;
                $product_gallery->save();
            }
        }
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product_gallery = ProductImage::where('product_id',$id)->get();
        $data = [
             'isEdit' => true,
             'product'=>$product,
             'product_images' => $product_gallery,
              ];
     return view('cms.product.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ProductImage $product_gallery)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $product = Product::find($request->id);
        if($request->has('thumbnail'))
        {
            $image = Storage::disk('cms')->putfile('',$request->thumbnail);
            $product->thumbnail     =  $image; 
        }
        if($request->has('codes'))
        {
            $codes = Storage::disk('cms')->putfile('',$request->codes);
            $product->codes     =  $codes; 
        }
        if($request->has('video'))
        {
            $video = Storage::disk('cms')->putfile('',$request->video);
            $product->video         =  $video; 
        }
        if($request->has('multi_images')){
            foreach($request->multi_images as $gallery_img){
                $product_gallery                =   new ProductImage;
                $product_gallery->product_id    =   $product->id;

                $imageName = Storage::disk('cms')->putFile('', $gallery_img);
                $product_gallery->image  =   $imageName;
                $product_gallery->save();
            }
        }

        $product->name          =   $request->name;
        $product->price         =   $request->price;
        $product->slug          =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $product->description   =   $request->description;
        $product->save();
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $product->thumbnail);
        Storage::disk('cms')->delete('', $product->codes);
        Storage::disk('cms')->delete('', $product->multi_images);
        Storage::disk('cms')->delete('', $product->video);
        $product->delete();

        return response()->json($product, 200);
    }
}