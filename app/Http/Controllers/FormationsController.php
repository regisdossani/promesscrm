<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Typeformation;
use App\Formation;
use Illuminate\Http\Request;

class FormationsController extends Controller
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
            $formations = Formation::latest()->paginate($perPage);
        } else {
            $formations = Formation::latest()->paginate($perPage);
        }
        return view('formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $types=Typeformation::all();
        $formations = Formation::all();
        return view('formations.create',compact('formations','types'));
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

        Formation::create($requestData);

        return redirect('admin/formations')->with('flash_message', 'Formation added!');
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
        $formation = Formation::findOrFail($id);
        $types=Typeformation::all();

        return view('formations.show', compact('formation','types'));
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
        $formation = Formation::findOrFail($id);
        $types=Typeformation::all();

        return view('formations.edit', compact('formation','types'));
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

        $formation = Formation::findOrFail($id);
        $formation->update($requestData);

        return redirect('formations')->with('flash_message', 'Formation updated!');
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
        Formation::destroy($id);

        return redirect('formations')->with('flash_message', 'Formation deleted!');
    }
}
