<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LanguageController extends Controller
{
  
    public function insert(Request $req){
        // dd('jjj');
        if($req->language){
            foreach($req->language as $i => $lan){
                DB::table('languages')->insert([
                    // 'skill_name'=> $skill,//short
                    'language' => $req->language[$i], // long form
                    'stu_id' => $req->stu_id,
                ]);
            }
        }
        return redirect('admin/education/education')->with('status','Language Data Successfly !');
}
  public function update(Request $req)
{
    // dd($req->all());
    $stu_id = $req->stu_id;

    foreach($req->language as $key => $value) {
        $id = $req->id[$key] ?? null;
        // dd($id);

        $data = [
            'stu_id'      => $stu_id,
            'language'  => $req->language[$key],
            
     
        ];
        // dd($data);

        if($id){
            DB::table('languages')->where('id', $id)->update($data);
        } else {
            DB::table('languages')->insert($data);
        }
    }

    return redirect()->back()->with('success', 'Data updated successfully');
}

}
