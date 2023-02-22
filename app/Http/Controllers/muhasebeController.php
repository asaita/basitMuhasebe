<?php

namespace App\Http\Controllers;

use App\Models\muhasebe;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class muhasebeController extends Controller
{
    public function welcome(Request $request){

        if ($request->ajax()) {
            $data = muhasebe::select('id','gelirAd','gelirFiyat','miktar','tolamFiyat')->get();
           
            
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view("welcome");
    }
}
