<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;
use DB;
class PagesController extends Controller
{
    public function home(){
    	$magazine=Magazine::latest()->first();
    	$recent=Magazine::where('id','!=',$magazine->id )->take(6)->latest()->get();
		$result = Magazine::select(DB::raw('YEAR(created_at) as year'))->distinct()->get();
		$years = $result->pluck('year');
    	return view('user.index')->with([
    		'magazine'=> $magazine,
    		'recent'=> $recent,
    		'years'=> $years
    	]);
    }
    public function getMagazine($slug){
    	$magazine=Magazine::where('emag_slug',$slug )->first();
    	$magList=Magazine::where('emag_slug','!=', $slug )->get();
    	return view('user.emagDetail')->with([
            'magazine'=> $magazine,
            'magList'=> $magList 
        ]);
    }
    public function getMagazineByYear(Request $request){
    	$recent=Magazine::whereYear('created_at',$request->emagYear )->take(6)->latest()->get();
    	return response()->json([
		    'msgType' => true,
		    'data' => [
		    	'year'=>$request->emagYear,
		    	'magazines'=>$recent
		    ],
		    'message'=>'Data fetched for the year!'
		]);
    }
    public function getMagazineByName(Request $request){
        $magazine=Magazine::where('emag_slug',$request->slug )->first();
        $magList=Magazine::where('emag_slug','!=', $request->slug )->get();
        return response()->json([
            'msgType' => true,
            'data' => [
                'magazine'=>$magazine,
                'magList'=>$magList
            ],
            'message'=>'Magazine retrieved!'
        ]);
    }
}
