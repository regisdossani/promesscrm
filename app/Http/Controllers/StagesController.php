<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Encadreur;
use App\Apprenant;
use App\Stage;
use Illuminate\Http\Request;

class StagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $stages = Stage::latest()->paginate($perPage);
        } else {
            $stages = Stage::latest()->paginate($perPage);
        }
          $encadreurs=Encadreur::all();
        return view('stages.index', compact('stages','encadreurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
         $stages = Stage::with('encadreur');
        $apprenants = Apprenant::all();
        $encadreurs = Encadreur::all();
        // $students = Apprenant::whereHas('stages','>',2)->get();

        return view('stages.create',compact('stages','encadreurs','apprenants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        if ($request->hasFile('pjconvention_stage')) {
            checkDirectory("stages");
            $requestData['pjconvention_stage'] = uploadFile($request,'pjconvention_stage', public_path('uploads/stages'));
        }
        Stage::create($requestData);


        // $apprenant->stages()->attach($stage->id); */

        return redirect('stages')->with('flash_message', 'Stage added!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $stage = Stage::findOrFail($id);
        $encadreurs=Encadreur::all();

        return view('stages.show', compact('stage','encadreurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $stage = Stage::findOrFail($id);
        $encadreurs = Encadreur::all();

        return view('stages.edit', compact('stage','encadreurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $stage = Stage::findOrFail($id);
        $stage->update($requestData);

        return redirect('stages')->with('flash_message', 'Stage updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Stage::destroy($id);

        return redirect('stages')->with('flash_message', 'Stage deleted!');
    }
}
