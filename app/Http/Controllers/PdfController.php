<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function download($id)
    {
        $cv = DB::table('cv_table')->where('id', $id)->first();
        $education = DB::table('education')->where('cv_id', $id)->get();
        $skills = DB::table('skill')->where('cv_id', $id)->get();
        $langu = DB::table('language')->where('cv_id', $id)->get();
        $work = DB::table('work')->where('cv_id', $id)->get();

        $data = compact('cv','education','skills','langu','work');

         $pdf = Pdf::loadView('admin.hero.detail', compact('cv','education','skills','work','langu'));
        return $pdf->download('cv-'.$cv->first_name.'.pdf');
    }
}
