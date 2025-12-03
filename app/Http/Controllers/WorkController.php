<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WorkController extends Controller
{
public function create(){
    // dd('dd');
    $cv_id =session()->get('cv_id');
    // dd($cv_id);
    return view('admin.work.create',compact('cv_id'));
}
public function insert(Request $req){
    if($req->job_title){
        foreach($req->job_title as $i => $job){
            DB::table('work')->insert([
            'job_title'=>$req->job_title[$i] ,
            
            'company'=>$req->company[$i],
            'date_start'=>$req->date_start[$i],
            'date_end'=>$req->date_end[$i],
            'cv_id'=>$req->cv_id,
            ]);
        }
    }
    session()->put('cv_id', $req->cv_id);   
    // dd(session('cv_id'));
    return redirect('admin/language/language')->with('status', 'Work records added to successfully!')->with('cv_id', session('cv_id'));
    
}
}
