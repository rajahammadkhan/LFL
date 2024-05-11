<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;

use App\Models\Fetch_date;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class FetchDateController extends Controller
{
    public function index()
    {
        $data = [            
            'abc' => Fetch_date::where('p_stat', 'Approved')->max('p_amt'),
            'startDate' =>   date('Y-m-d', strtotime(Fetch_date::pluck('date')->first())),
            'lastDate' =>   date('Y-m-d', strtotime(Fetch_date::orderBy('date', 'desc')->pluck('date')->first())),
        ];
        return view('cms.fetch_approve_camp.index', $data);
    }

    public function datatable()
    {
        $used_camp = Fetch_date::where('p_stat','Approved')->orderBy("id","DESC")->get();

        return DataTables::collection($used_camp)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(Fetch_date $used_camp)
    {
        $data = [
            'used_camp'    => $used_camp->load('details'),
        ];

        // return $data['blogs'];

        return view('cms.fetch_approve_camp.add-header-content', $data);
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = Fetch_date::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    public function getDataFetch(Request $request)
    {
        $status = $request->input('amount');
        
        $transactionsQuery = Fetch_date::where('p_stat', 'Approved')->orderBy("id","DESC");

        if ($status !== 'All') {
            $transactionsQuery->where('p_amt', $status);
        }
        $transactions = $transactionsQuery->orderBy("id","DESC")->get();
        // dd($transactions);
        $count = $transactions->count();

        return response()->json(['transactions' => $transactions, 'count' => $count]);
    }
}
