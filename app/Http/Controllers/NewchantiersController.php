<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use App\Newchantier;
use Illuminate\Http\Request;

class NewchantiersController extends Controller
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
            $newchantiers = Newchantier::latest()->paginate($perPage);
        } else {
            $newchantiers = Newchantier::latest()->paginate($perPage);
        }

        return view('newchantiers.index', compact('newchantiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $newchantiers=Newchantier::all();
        return view('newchantiers.create',compact('newchantiers'));
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
        $this->validator($request->all())->validate();
        $requestData = $request->all();

        Newchantier::create($requestData);

        return redirect('newchantiers')->with('flash_message', 'Newchantier added!');
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
        $newchantier = Newchantier::findOrFail($id);

        return view('newchantiers.show', compact('newchantier'));
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
        $newchantier = Newchantier::findOrFail($id);

        return view('newchantiers.edit', compact('newchantier'));
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

        $newchantier = Newchantier::findOrFail($id);
        $newchantier->update($requestData);

        return redirect('newchantiers')->with('flash_message', 'Newchantier updated!');
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
        Newchantier::destroy($id);

        return redirect('newchantiers')->with('flash_message', 'Newchantier deleted!');
    }
    protected function validator(array $data)
    {
        return Validator::make($data,
        [
            'nom' => 'required', 'string', 'max:255',
            'tel' => 'required', 'string', 'max:255',
            'email'=>'unique:newchantiers,email'

        ]);
    }

}
