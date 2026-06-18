<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;
class HeroController extends Controller
{
    public function list(){
        // dd('jjd');
        $data = DB::table('students')->orderBy('id',"desc")->paginate(5);
        return view('admin/hero/list',compact('data'));
    }
    public function create(){
        // dd('dd');
        return view('admin/hero/create');
    }
    public function detail($id){
        // dd('dd');
     
    $students = DB::table('students')->where('id', $id)->first();
    // dd($students);

   
    $edu  = DB::table('educations')->where('stu_id',$students->id)->get();
    $skill  = DB::table('skills')->where('stu_id',$students->id)->get();
    $work  = DB::table('works')->where('stu_id',$students->id)->get();
      $languages  = DB::table('languages')->where('stu_id',$students->id)->get();
    // dd($skill);
 
    
 
   

    return view('admin.hero.detail', compact('students','edu','work','skill','languages'));
    }
    public function cv($id){
        // dd('dd');
     
    $students = DB::table('students')->where('id', $id)->first();
    // dd($students);

   
    $education  = DB::table('educations')->where('stu_id',$students->id)->get();
    $skills  = DB::table('skills')->where('stu_id',$students->id)->get();
    $work  = DB::table('works')->where('stu_id',$students->id)->get();
    $languages  = DB::table('languages')->where('stu_id',$students->id)->get();
    // dd($skill);
 
    
 
   

    return view('admin.hero.hello', compact('students','education','skills','work','languages'));
    }
  
  
  public function insert(Request $req)
{
    // dd($req->all());
 
    
    // ----- Image Upload -----
  
    
    // ----- Image Upload -----
    if ($req->has('image')) {
        $file = $req->file('image');
        $image = time() . '_' . $file->getClientOriginalName(); // unique naam
        $file->move('public/admin/image/hero', $image);
    } else {
        $image = "";
    }

    // ----- Personal Data Insert -----
    $stu_id=DB::table('students')->insertGetId(
     [
        'name'    => $req['name'],
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
        'religation'=>$req['religation'],
     
    ]);
    // dd($insert);
      session()->put('stu_id', $stu_id);
     
    
    return redirect('admin/education/education')->with('status','Personal Data Successfly !');


}
public function edit($id){
    // dd('kk');
    $edit=DB::table('students')->where('id',$id)->first();
    // dd($edit);
    return view('admin/hero/edit',compact('edit'));
}
public function update(Request $req ){
    $id = $req->id;
          //  dd($id);
   $old_img= DB::table('students')->where('id',$id)->first();
    $img = $old_img->image;
    if($req->hasFile('image')){
      $img = $req->image->getClientOriginalName();
    //   dd($img);
        $req->image->move('public/admin/image/hero',$img);
    }

    // dd($id);
    $update =
        [
            'image'=>$img,
         'name'    => $req->name,
        'cinc'     => $req->cinc,
        'phone'         => $req->phone,
        'email'         => $req->email,
        'address'       => $req->address,
        'date_birth'    => $req->date_birth,
  
        'gender'=>$req->gender,
        'status'=>$req->status,
        'nationality'=>$req->nationality,
        'father'=>$req->father,
        'religation'=>$req->religation,

    ];

  
    
    DB::table('students')->where('id',$id)->update($update);
 
    
    //  dd($edu);
   
  session()->put('stu_id', $req->id);
               
            //    dd(session()->get('stu_id'));   
             
 
    return redirect('admin/education/edit')->with('status','data update ');
}
public function delete($id){
  DB::table('students')->where('id', $id)->delete();
  return back();
}
}   
