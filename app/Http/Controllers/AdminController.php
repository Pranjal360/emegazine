<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function home(){
    	$magazine=Magazine::latest()->first();
    	return view('admin.home')->with('magazine',$magazine);
    }
    public function addIssue(){
    	return view('admin.addissue');
    }
    public function issueList(){
    	$magazine=Magazine::latest()->get();
    	return view('admin.issuelist',compact('magazine'));
    }
    public function createIssue(Request $request){
    	$rules = [
            'issue_cover' => 'required',
            'issue_no' => 'required',
            'issue_pdf' => 'required',
            'summary'=> 'required'
        ];
        $customMessages = [
            'issue_cover.required' => 'Please enter member name',
            'issue_no.required' => 'Please enter member information',
            'issue_pdf.required' => 'Please enter member designation',
            'summary.required' => 'Please provide team member thumbnail photo',
        ];
        $this->validate($request, $rules, $customMessages);
        $slug=$this->generateSlug($request->issue_no);
        $magazine = new Magazine();
        $magazine->issue_no=$request->issue_no;
        $magazine->issue_summary=$request->summary;
        $magazine->emag_slug=$slug;
        $path = 'uploads/emagazine/'.$slug;
        \File::makeDirectory($path, 0777, true, true);
        if ($request->hasFile('issue_cover')){
            $imageName = time().'.'.$request->issue_cover->getClientOriginalExtension();
            $request->issue_cover->move($path, $imageName);
            $magazine->cover_pic = $path.'/'.$imageName;
        }
        if ($request->hasFile('issue_pdf')){
            $imageName = time().'.'.$request->issue_pdf->getClientOriginalExtension();
            $request->issue_pdf->move($path, $imageName);
            $magazine->pdf_url = $path.'/'.$imageName;
        }
        $magazine->save();
        return redirect()->action('AdminController@issueList')->with('success','Emagazine added successfully!');
    }
    public function generateSlug($magName){
        $magName = preg_replace("/[^a-zA-Z]+/", "", $magName);
        return strtolower(substr(str_shuffle($magName), 0, 6));
    }
}
