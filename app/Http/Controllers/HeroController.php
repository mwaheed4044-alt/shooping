<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;
class HeroController extends Controller
{
    public function list(){
        // dd('jjd');
        $data = DB::table('cv_table')->orderBy('id',"desc")->paginate(5);
        return view('admin/hero/list',compact('data'));
    }
    public function create(){
        // dd('dd');
        return view('admin/hero/create');
    }
    public function detail($id){
        // dd('dd');
     
    $cv = DB::table('cv_table')->where('id', $id)->first();

    // agar related tables mein cv_id field rakhi hai:
    $education   = DB::table('education')->where('cv_id', $id)->get();
    $skills      = DB::table('skill')->where('cv_id', $id)->get();
    $work  = DB::table('work')->where('cv_id', $id)->get();
    // dd($work);
    $langu  = DB::table('language')->where('cv_id', $id)->get();
    // ... aur jitne bhi related tables hain

    return view('admin.hero.detail', compact('cv','education','skills','work','langu'));
    }
  
  
  public function insert(Request $req)
{
    // dd($req->all());
 
    
    // ----- Image Upload -----
    if ($req->has('image')) {
        $file = $req->file('image');
        $image = time() . '_' . $file->getClientOriginalName(); // unique naam
        $file->move('public/admin/image/hero', $image);
    } else {
        $image = "";
    }

    // ----- Personal Data Insert -----
    $cv_id=DB::table('cv_table')->insertGetId(
     [
        'first_name'    => $req['first_name'],
        'cinc'     => $req['cinc'],
        'phone'         => $req['phone'],
        'email'         => $req['email'],
        'address'       => $req['address'],
        'date_birth'    => $req['date_birth'],
        'image'         => $image,
        'gender'=>$req['gender'],
        'status'=>$req['status'],
        'nationality'=>$req['nationality'],
        'father'=>$req['father'],
        'religion'=>$req['religion'],
     
    ]);
    // dd($insert);
    
    return redirect('admin/education/education/'.$cv_id)->with('status', 'persoanal added to successfully!');


}
public function delete($id){
  DB::table('cv_table')->where('id', $id)->delete();
  return back();
}
}   
