<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EducationController extends Controller
{
    public function education($cv_id)
    {
        // CV ka record nikalo
        $cv = DB::table('cv_table')->where('id', $cv_id)->first();
    
        return view('admin.education.education', compact('cv_id', 'cv'));
    }
    public function insert(Request $req)
    {
        if ($req->school_collage_university) {
            foreach ($req->school_collage_university as $i => $school) {
                DB::table('education')->insert([
                    'school_collage_university' => $school,
                    'degree'                    => $req->degree[$i],
                    'city'                      => $req->city[$i],
                    'start_date'                => $req->start_date[$i],
                    'end_date'                  => $req->end_date[$i],
                    'obtaind_mark'                  => $req->obtaind_mark[$i],
                    'total'                  => $req->total[$i],
                    'cv_id'                     => $req->cv_id,
                ]);
            }
        }
         session()->put('cv_id', $req->cv_id);
        //  dd(session()->get('cv_id'));   // ya
        //  dd(session('cv_id'));
        // $cv_id = session('cv_id');
        return redirect('admin/skill/create') // is route pe redirect hoga
        ->with('status', 'Education records added successfully!')
        ->with('cv_id', session('cv_id'));
           
          
        
    }
    

    
}
