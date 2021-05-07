<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Models\tugas;

class TugasController extends Controller
{
    public function view(){

    	$tugas= DB::table('datatable')
    			->select('barcode', DB::raw('count(*) as jumlah'), 
    				                DB::raw('sum(price) as price'), 
    				                DB::raw('sum(status="READY") as ready'), 
    				                DB::raw('sum(status="ONHOLD") as onhold'), 
    				                DB::raw('sum(status="DELIVERED") as delivered'), 
    				                DB::raw('sum(status="PACKING") as packing'), 
    				                DB::raw('sum(status="SENT") as sent'))
    			->groupBy('barcode')
    			->get();
    	return view('views', ['tugas' => $tugas]);
    }
}
