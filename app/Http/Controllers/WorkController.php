<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WorkController extends Controller
{

public function insert(Request $req){
    if($req->job_title){
        foreach($req->job_title as $i => $job){
            DB::table('works')->insert([
            'job_title'=>$req->job_title[$i] ,
            
            'company'=>$req->company[$i],
            'start_year'=>$req->start_year[$i],
            'end_year'=>$req->end_year[$i],
            'stu_id'=>$req->stu_id,
            ]);
        }
    }
    // session()->put('cv_id', $req->cv_id);   
    // dd(session('cv_id'));
    return redirect('admin/education/education')->with('status',' Work Data Successfly !');
    
}
  public function update(Request $req)
{
    // dd($req->all());
    $stu_id = $req->stu_id;

    foreach($req->job_title as $key => $value) {
        $id = $req->id[$key] ?? null;
        // dd($id);

        $data = [
            'stu_id'      => $stu_id,
            'job_title'  => $req->job_title[$key],
            'company' => $req->company[$key],
            'start_year'=> $req->start_year[$key],
            'end_year'  => $req->end_year[$key],
            
     
        ];
        // dd($data);

        if($id){
            DB::table('works')->where('id', $id)->update($data);
        } else {
            DB::table('works')->insert($data);
        }
    }

    return redirect()->back()->with('success', 'Data updated successfully');
}
}
