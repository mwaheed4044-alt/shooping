<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EducationController extends Controller
{
    public function education()
    {
        // dd('ll');
          $stu_id=  session()->get('stu_id');   
        //   dd($dd);// ya
        // CV ka record nikalo
        // $cv = DB::table('students')->where('id', $dd)->first();
        // dd($cv);
    
        return view('admin/education/education', compact( 'stu_id'));
    }
    public function insert(Request $req)
    {
        // dd($req->all());
      if ($req->board_name) {
    foreach ($req->board_name as $i => $board) {
        DB::table('educations')->insert([
            'board_name'   => $board,
            'degree_name'  => $req->degree_name[$i] ?? null,
            'passing_year' => $req->passing_year[$i] ?? null,
            'obtaind_mark' => $req->obtaind_mark[$i] ?? null,
            'total_mark'   => $req->total_mark[$i] ?? null,
          
            'job_title'    => $req->job_title[$i] ?? null,
            'company'      => $req->company[$i] ?? null,
            'start_year'   => $req->start_year[$i] ?? null,
            'end_year'     => $req->end_year[$i] ?? null,
            'stu_id'       => $req->stu_id,
        ]);
    }
}

        //  session()->put('cv_id', $req->cv_id);
        //  dd(session()->get('cv_id'));   // ya
        //  dd(session('cv_id'));
        // $cv_id = session('cv_id');
        return redirect('admin/education/education',)->with('status','Education Data Successfly !'); 
       
           
          
        
    }
    public function edit(){
        // dd('kkk');
        $stu_id=  session()->get('stu_id');   
        //   dd($stu_id);
        $edu = DB::table('educations')->where('stu_id',$stu_id)->get();
           $skill = DB::table('skills')->where('stu_id',$stu_id)->get();
           $work = DB::table('works')->where('stu_id',$stu_id)->get();
           $languages = DB::table('languages')->where('stu_id',$stu_id)->get();
        // dd($skill);
      
     return view('admin.education.edit', compact('edu','stu_id','skill','work','languages'));
    }
  public function update(Request $req)
{
    // dd($req->all());
    $stu_id = $req->stu_id;

    foreach($req->board_name as $key => $value) {
        $id = $req->id[$key] ?? null;
        // dd($id);

        $data = [
            'stu_id'      => $stu_id,
            'board_name'  => $req->board_name[$key],
            'degree_name' => $req->degree_name[$key],
            'obtaind_mark'=> $req->obtaind_mark[$key],
            'total_mark'  => $req->total_mark[$key],
            'passing_year'=> $req->passing_year[$key],
     
        ];

        if($id){
            DB::table('educations')->where('id', $id)->update($data);
        } else {
            DB::table('educations')->insert($data);
        }
    }

    return redirect()->back()->with('success', 'Data updated successfully');
}


    

    
}
