<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.ticket.index');
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
        return view('cms.ticket.add',$data);
    }

    public function datatable()
    {
        $ticket = Ticket::get();
        return DataTables::collection($ticket)->toJson();
    }

    public function status(Request $request)
    {
        $status = $request->status;
        $id = $request->id;
        $item = Ticket::find($id);
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
            'coupon' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);
        $ticket         =   new Ticket;
        $ticket->coupon          =   $request->coupon;
        $ticket->name          =   $request->name;
        $ticket->slug          =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $ticket->price         =   $request->price;
        $ticket->category         =   $request->category;
        $ticket->location   =   $request->location;
        $ticket->date   =   $request->date;
        $ticket->time   =   $request->time;
        $ticket->save();
        return redirect()->route('ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        $data = [
             'isEdit' => true,
             'ticket'=>$ticket,
              ];
     return view('cms.ticket.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'coupon' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);
        $ticket = Ticket::find($request->id);
        $ticket->coupon          =   $request->coupon;
        $ticket->name          =   $request->name;
        $ticket->slug          =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $ticket->price         =   $request->price;
        $ticket->category         =   $request->category;
        $ticket->location   =   $request->location;
        $ticket->date   =   $request->date;
        $ticket->time   =   $request->time;
        $ticket->save();
        return redirect()->route('ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ticket = Ticket::where('id', $request->deleteId)->first();
        $ticket->delete();
        return response()->json( $ticket, 200);
    }
}
