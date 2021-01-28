<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Rapportstage;
use Illuminate\Http\Request;

class RapportstagesController extends Controller
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
            $rapportstages = Rapportstage::latest()->paginate($perPage);
        } else {
            $rapportstages = Rapportstage::latest()->paginate($perPage);
        }

        $apprenants=Apprenant::all();
        $filieres=Filiere::all();
        $promos=Promo::all();
        $stages=Stage::all();


        return view('rapportstages.index', compact('rapportstages','stages','promos','filieres','apprenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
   /*  public function create()
    {
        return view('rapportstages.create');
    } */

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

        Rapportstage::create($requestData);

        return redirect('rapportstages')->with('flash_message', 'Rapportstage added!');
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
        $rapportstage = Rapportstage::findOrFail($id);

        return view('rapportstages.show', compact('rapportstage'));
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
        $rapportstage = Rapportstage::findOrFail($id);

        return view('rapportstages.edit', compact('rapportstage'));
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

        $rapportstage = Rapportstage::findOrFail($id);
        $rapportstage->update($requestData);

        return redirect('rapportstages')->with('flash_message', 'Rapportstage updated!');
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
        Rapportstage::destroy($id);

        return redirect('rapportstages')->with('flash_message', 'Rapportstage deleted!');
    }
}
