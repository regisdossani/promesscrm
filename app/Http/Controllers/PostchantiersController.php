<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Suivipostchantier;
use Illuminate\Http\Request;

class PostchantiersController extends Controller
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
            $suivipostchantiers = Suivipostchantier::latest()->paginate($perPage);
        } else {
            $suivipostchantiers = Suivipostchantier::latest()->paginate($perPage);
        }

        return view('suivipostchantiers.index', compact('suivipostchantiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('suivipostchantiers.create');
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
        
        Suivipostchantier::create($requestData);

        return redirect('suivipostchantiers')->with('flash_message', 'Suivipostchantier added!');
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
        $suivipostchantier = Suivipostchantier::findOrFail($id);

        return view('suivipostchantiers.show', compact('suivipostchantier'));
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
        $suivipostchantier = Suivipostchantier::findOrFail($id);

        return view('suivipostchantiers.edit', compact('suivipostchantier'));
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
        
        $suivipostchantier = Suivipostchantier::findOrFail($id);
        $suivipostchantier->update($requestData);

        return redirect('suivipostchantiers')->with('flash_message', 'Suivipostchantier updated!');
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
        Suivipostchantier::destroy($id);

        return redirect('suivipostchantiers')->with('flash_message', 'Suivipostchantier deleted!');
    }
}
