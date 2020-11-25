<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Typeformation;
use Illuminate\Http\Request;

class TypeformationsController extends Controller
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
            $typeformations = Typeformation::latest()->paginate($perPage);
        } else {
            $typeformations = Typeformation::latest()->paginate($perPage);
        }

        return view('typeformations.index', compact('typeformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('typeformations.create');
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

        Typeformation::create($requestData);

        return redirect('typeformations')->with('flash_message', 'Typeformation added!');
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
        $typeformation = Typeformation::findOrFail($id);

        return view('typeformations.show', compact('typeformation'));
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
        $typeformation = Typeformation::findOrFail($id);

        return view('typeformations.edit', compact('typeformation'));
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

        $typeformtion = Typeformation::findOrFail($id);
        $typeformtion->update($requestData);

        return redirect('typeformations')->with('flash_message', 'Typeformation updated!');
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
        Typeformation::destroy($id);

        return redirect('typeformations')->with('flash_message', 'Typeformation deleted!');
    }
}
