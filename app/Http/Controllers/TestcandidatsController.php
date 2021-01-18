<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Candidat;
use App\Promo ;
use App\Filiere;
use App\Testcandidat;
use Illuminate\Http\Request;

class TestcandidatsController extends Controller
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
            $testcandidat= Testcandidat::latest()->paginate($perPage);
        } else {
            $testcandidat = Testcandidat::latest()->paginate($perPage);
        }

        return view('testcandidats.index', compact('testcandudats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $candidats=Candidat::all();
        $filieres=Filiere::all();
        $promos=Promo::all();


        return view('testcandidats.create',compact('filieres','candidats','promos'));
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

        Testcandidat::create($requestData);

        return redirect('testcandidats')->with('flash_message', 'Testcandidat added!');
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
        $testcandidat = Testcandidat::findOrFail($id);

        return view('testcandidats.show', compact('testcandidat'));
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
        $testcandidat = Testcandidat::findOrFail($id);

        return view('.edit', compact('testcandidat'));
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

        $testcandidat= Testcandidat::findOrFail($id);
        $testcandidat->update($requestData);

        return redirect('testcandidats')->with('flash_message', 'Testcandidat updated!');
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
        Testcandidat::destroy($id);

        return redirect('testcandidats')->with('flash_message', 'Testcandidat deleted!');
    }
}
