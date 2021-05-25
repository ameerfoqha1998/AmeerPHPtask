<?php

namespace App\Http\Controllers;
use App\Models\file;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
class filescontroller extends Controller
{
    function getData(){
      $files = DB::select('select f.filename, f.date, COUNT(d.id) as line from files as f inner join datas as d on d.file_id=f.id group by f.filename, f.date ORDER BY COUNT(d.id) DESC');
      return view('AmeerPage', ['files'=>$files]);
  } 
}
