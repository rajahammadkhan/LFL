<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;

use App\Models\DownloadApprovedCamp;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use PDF;

class DownloadApprovedCampController extends Controller
{
    public function index()
    {
        $data = [
            'startDate' =>   date('Y-m-d', strtotime(DownloadApprovedCamp::pluck('date')->first())),
            'lastDate' =>   date('Y-m-d', strtotime(DownloadApprovedCamp::orderBy('date', 'desc')->pluck('date')->first())),
        ];
        return view('cms.download_approve_camp.index', $data);
    }

    public function datatable()
    {
        $used_camp = DownloadApprovedCamp::where('p_stat','Approved')->orderBy("id","DESC")->get();

        return DataTables::collection($used_camp)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(DownloadApprovedCamp $used_camp)
    {
        $data = [
            'used_camp'    => $used_camp->load('details'),
        ];

        // return $data['blogs'];

        return view('cms.download_approve_camp.add-header-content', $data);
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = DownloadApprovedCamp::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    public function getDataDownloadBetweenDates(Request $request)
    {
        $status = $request->input('status');
        $campUsed = $request->input('used');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $transactionsQuery = DownloadApprovedCamp::whereBetween('date', [$startDate, $endDate])
            ->orderBy("id","DESC");

        if ($status !== 'All') {
            $transactionsQuery->where('p_stat', $status);
        }

        if ($campUsed !== 'All') {
            $transactionsQuery->where('used_camp', $campUsed);
        }

        $transactions = $transactionsQuery->orderBy("id","DESC")->get();
        $count = $transactions->count();

        return response()->json(['transactions' => $transactions, 'count' => $count]);
    }
}
