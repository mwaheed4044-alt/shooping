<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SkillController extends Controller
{
public function skillcreate(){
    
    $cv_id =session()->get('cv_id');
     
    return view('admin.skill.create',compact('cv_id'));
}
public function insert(Request $req){
    // dd('jjj');
    if($req->skill_name){
        foreach($req->skill_name as $i => $skill){
            DB::table('skill')->insert([
                // 'skill_name'=> $skill,//short
                'skill_name' => $req->skill_name[$i], // long form
                // 'skill_level'=>$req->skill_level[$i],
                // 'skill_experience'=>$req->skill_experience[$i],
                'cv_id' => $req->cv_id,
            ]);
        }
    }
    session()->put('cv_id', $req->cv_id);
    // dd(session('cv_id'));
    return redirect('admin/work/create')->with('status', 'Skill records added to successfully!')->with('cv_id', session('cv_id'));

}
}
