<?php


namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CampSentWhatsApp;
use App\Models\Lexus;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CampSentWhatsAppController extends Controller
{
    public function datatable()
    {
        $blog = CampSentWhatsApp::orderBy("id","DESC")->get();

        return DataTables::collection($blog)->toJson();
    }

    public function index()
    {
        $data = [
            'blogs' =>  CampSentWhatsApp::get(),
        ];
        return view('cms.camp_sent.index', $data);
    }

    public function create()
    {
        $custmerlist = Lexus::select('customer.phone')
            ->join(DB::raw("(SELECT MAX(id) as max_id FROM customer GROUP BY phone ORDER BY phone DESC) as sub"), function ($join) {
                $join->on('customer.id', '=', 'sub.max_id');
            })
            ->orderBy('customer.phone', 'DESC')
            ->limit(1000) // Replace '10' with the desired limit
            ->get();

        // $custmerlist = Lexus::select('phone')->distinct()->get();    

        $data = [
            'isEdit' => false,
            'custmerlists'    => $custmerlist,
            'count' => count($custmerlist),
        ];

        return view('cms.camp_sent.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $blog = new CampSentWhatsApp;
        $blog->img_url = $request->name;
        $blog->numbers = serialize($request->numbers);

        $writenumber = $request->writenumber;
        $numbersArray = [];
        foreach ($writenumber as $commaSeparatedNumbers) {
            $numbers = explode(", ", $commaSeparatedNumbers);
            $numbersArray = array_merge($numbersArray, $numbers);
        }

        $blog->writenumber = serialize($numbersArray);
        $blog->save();

        return view('cms.camp_sent.includes.sentmsg', ['blog' => $blog]);
    }

    public function edit(CampSentWhatsApp $blog)
    {
        $data = [
            'isEdit'                => true,
            'blog'    => $blog,
        ];

        // return $data['blogs'];

        return view('cms.camp_sent.add', $data);
    }

    public function update(Request $request, CampSentWhatsApp $blog)
    {
        // return $request;

        if($request->has('image')){
            Storage::disk('cms')->delete('', $blog->image);
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $blog->image  =   $imageName;
        }

        $blog->name                 =   $request->name;
        $blog->by                   =   $request->by;
        $blog->slug                 =   Str::slug($request->name);
        $blog->date                 =   $request->date;
        $blog->description          =   $request->description;
        $blog->keywords             =   $request->keywords;
        $blog->meta_title           =   $request->meta_title;
        $blog->meta_description     =   $request->meta_description;
        $blog->save();

        return redirect()->route('campimgs');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = CampSentWhatsApp::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    public function destroy(Request $request)
    {
        $blog = CampSentWhatsApp::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $blog->image);
        $blog->delete();

        return response()->json($blog, 200);
    }
}
