<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CampImage;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CampImageController extends Controller
{
    public function datatable()
    {
        $campimg = CampImage::orderByDesc('id')->get();       

        return DataTables::collection($campimg)->toJson();
    }

    public function index()
    {
        $data = [
            'campimgs' =>  CampImage::get(),
        ];
        return view('cms.camp_img.index', $data);
    }

    public function create()
    {
        $data = [
            'isEdit' => false,
        ];

        return view('cms.camp_img.add', $data);
    }

    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'name' => 'required',
        ]);
        
        $campimg         =   new CampImage;

        if($request->has('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = Storage::disk('cms')->putFileAs('', $image, $imageName);
            $campimg->image = $imagePath;
        }

        $campimg->name                 =   $request->name;
        $campimg->slug                 =   Str::slug($request->name);
        $campimg->save();

        return redirect()->route('campimgs');
    }

    public function edit(CampImage $campimg)
    {
        $data = [
            'isEdit'                => true,
            'campimg'    => $campimg,
        ];

        // return $data['campimgs'];

        return view('cms.camp_img.add', $data);
    }

    public function update(Request $request, CampImage $campimg)
    {
        // return $request;

        if($request->has('image')){
            Storage::disk('cms')->delete('', $campimg->image);
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $campimg->image  =   $imageName;
        }

        $campimg->name                 =   $request->name;
        $campimg->by                   =   $request->by;
        $campimg->slug                 =   Str::slug($request->name);
        $campimg->date                 =   $request->date;
        $campimg->description          =   $request->description;
        $campimg->keywords             =   $request->keywords;
        $campimg->meta_title           =   $request->meta_title;
        $campimg->meta_description     =   $request->meta_description;
        $campimg->save();

        return redirect()->route('campimgs');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = CampImage::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    public function destroy(Request $request)
    {
        $campimg = CampImage::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $campimg->image);
        $campimg->delete();

        return response()->json($campimg, 200);
    }
}
