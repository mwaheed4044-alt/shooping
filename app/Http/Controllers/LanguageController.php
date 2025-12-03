<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LanguageController extends Controller
{
    public function language(){
        // dd('dd');
        $cv_id = session()->get('cv_id');
        // dd($cv_id);
        return view('admin/language/language',compact('cv_id'));
    }
    public function insert(Request $req){
        // dd('jjj');
        if($req->language){
            foreach($req->language as $i => $lan){
                DB::table('language')->insert([
                    // 'skill_name'=> $skill,//short
                    'language' => $req->language[$i], // long form
                    'cv_id' => $req->cv_id,
                ]);
            }
        }
        return redirect('admin/hero/list')->with('status', 'Language records added to successfully!');
}
}
