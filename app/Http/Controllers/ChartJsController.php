<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenant;
use App\Stage;
use App\Promo;
use App\Filiere;

use DB;
use Carbon\Carbon;

class ChartJsController extends Controller
{
   public function index()
    {
        $year = ['2018','2019','2020','2021','2022','2023','2024'];

        $apprenant = [];
        foreach ($year as $key => $value) {
            $apprenant[] = Apprenant::select(\DB::raw("COUNT(*) as nb_apt"))
            ->whereYear('created_at', date('Y'))
            ->pluck('nb_apt');
        }

    	return view('chartjs')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('apprenant',json_encode($apprenant,JSON_NUMERIC_CHECK));
    }
}

