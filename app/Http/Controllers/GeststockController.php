<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Generation;
use Illuminate\Http\Request;

class GeststockController extends Controller
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
            $generations = Generation::latest()->paginate($perPage);
        } else {
            $generations = Generation::latest()->paginate($perPage);
        }

            $entres = Generation::where('mode', 1)->take(10)->get();
            $sorties = Generation::where('mode', 2)->take(10)->get();
            // return view('dashboard.home')->with('entres',$entres)->with('sorties',$sorties);
        return view('generations.index', compact('generations','sorties','entres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('generations.create');
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

        Generation::create($requestData);

        return redirect('generations')->with('flash_message', 'Generation added!');
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
        $generation = Generation::findOrFail($id);

        return view('generations.show', compact('generation'));
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
        $generation = Generation::findOrFail($id);

        return view('generations.edit', compact('generation'));
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

        $generation = Generation::findOrFail($id);
        $generation->update($requestData);

        return redirect('generations')->with('flash_message', 'Generation updated!');
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
        Generation::destroy($id);

        return redirect('generations')->with('flash_message', 'Generation deleted!');
    }
}
