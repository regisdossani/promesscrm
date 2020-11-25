<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Calendar;
use Redirect,Response;

class CalendrierController extends Controller
{
    public function index()
    {
        $data = DB::table('calendars')->get();
        return view('admins.calendrier', ['data'=>$data]);
    } 

    public function create(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
        'color' => $request->color,
        'start_date' => $request->start,
        'end_date' => $request->end
        ];
        $calendar = Calendar::insert($insertArr);
        //return Response::json($calendar);
        return redirect('/calendrier');
    }

    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'color' => $request->color,'start_date' => $request->start, 'end_date' => $request->end];
        $calendar  = Calendar::where($where)->update($updateArr);
        //return Response::json($calendar);
        return redirect('/calendrier');
    }

    public function destroy(Request $request)
    {
        $calendar = Calendar::where('id',$request->id)->delete();
        return Response::json($calendar);
    }
}
