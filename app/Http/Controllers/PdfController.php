<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PdfController extends Controller
{
  public function create(){
    // dd('kk');
    return view('admin/ajx/create');
  }
  public function list(){
    // dd('kk');
    return view('admin/ajx/list');
  }
  public function insert(Request $req){
    dd('kk');
  }


}

     