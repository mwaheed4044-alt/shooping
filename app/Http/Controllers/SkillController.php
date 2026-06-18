<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SkillController extends Controller
{

public function insert(Request $req){
    // dd('jjj');
    // dd($req->all());
    if($req->skill_name){
        foreach($req->skill_name as $i => $skill){
            DB::table('skills')->insert([
                //
                'skill_name' => $req->skill_name[$i], // long form
                'stu_id' => $req->stu_id,
            ]);
        }
    }
  
    // dd(session('cv_id'));
    return redirect('admin/education/education')->with('status','Skill Data Successfly !');

}

  public function update(Request $req)
{
    // dd($req->all());
    $stu_id = $req->stu_id;

    foreach($req->skill_name as $key => $value) {
        $id = $req->id[$key] ?? null;
        // dd($id);

        $data = [
            'stu_id'      => $stu_id,
            'skill_name'  => $req->skill_name[$key],
            
     
        ];
        // dd($data);

        if($id){
            DB::table('skills')->where('id', $id)->update($data);
        } else {
            DB::table('skills')->insert($data);
        }
    }

    return redirect()->back()->with('success', 'Data updated successfully');
}
}
