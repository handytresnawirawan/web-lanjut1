<?php

namespace App\Http\Controllers;
use App\penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
   public function index()
   {
    $title = 'penyewa';
    $penyewa = penyewa::paginate(5);
   
    return view('admin.penyewa.penyewa',compact('title','penyewa'));
   }
    //
}
