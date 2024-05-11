<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;

use App\Models\AprovedUsedCamp;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class AprovedUsedCampController extends Controller
{
    public function index()
    {
        $data = [
            // 'used_camp' =>  used_camp::orderBy("id","DESC")->get(),
        ];
        return view('cms.used_camp.index', $data);
    }

    public function datatable()
    {
        // $used_camp = used_camp::orderBy("id","DESC")->get();
        $used_camp = AprovedUsedCamp::where('p_stat','Approved')->orderBy("id","DESC")->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($used_camp)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(AprovedUsedCamp $used_camp)
    {
        $data = [
            'used_camp'    => $used_camp->load('details'),
        ];

        // return $data['blogs'];

        return view('cms.used_camp.add-header-content', $data);
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = AprovedUsedCamp::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(AprovedUsedCamp $camp)
    {
        $data = [
            'isEdit'                => true,
            'camp'    => $camp,
        ];

        return view('cms.used_camp.add', $data);
    }

    public function update(Request $request, AprovedUsedCamp $camp)
    {
        // return $request;

        $camp->used_camp     =   $request->used_camp;
        $camp->used_camp_qty =   $request->used_camp_qty;
        // dd($request->used_camp);
        $camp->save();

        return redirect()->route('approvedcamps');
    }

    public function destroy(Request $request)
    {
        $lexus = AprovedUsedCamp::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $lexus->image);
        $lexus->delete();
        return response()->json($lexus, 200);
    }
}