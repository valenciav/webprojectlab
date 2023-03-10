<?php

namespace App\Http\Controllers;

use App\Models\Item_Details;
use App\Models\itemdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubPageController extends Controller
{
    //
    public function itemdetails(Request $request)
    {
        $id = $request->route('product_id');
        $item = itemdetail::where('id', $id)->first();
        return view('core_page/subhomecontent/itemdetails')->with(compact('item'));
    }
}
