<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
   public function index()
{
return view('search.search');
}
public function search(Request $request)
{
if($request->ajax())
{
$output="";
$classes=DB::table('classes')->where('name','LIKE','%'.$request->search."%")->get();
if($classes)
{
foreach ($classes as $key => $classe) {
$output.='<tr>'.
'<td>'.$classe->id.'</td>'.
'<td>'.$classe->name.'</td>'.
'<td>'.$product->description.'</td>'.
'<td>'.$product->price.'</td>'.
'</tr>';
}
return Response($output);
   }
   }
}
}
