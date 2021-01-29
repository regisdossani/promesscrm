<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Module;
use App\Formateur;
use Illuminate\Http\Request;

class FormateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

   /*  function __construct()
    {
         $this->middleware('auth');

    }
 */

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formateurs = Formateur::latest()->paginate($perPage);
        } else {
            $formateurs = Formateur::latest()->paginate($perPage);
        }

        return view('formateurs.index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $formateurs= Formateur::all();
         $modules=Module::all();
        return view('formateurs.create',compact('formateurs','modules'));
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
        $this->validate($request,[
            'nom' => 'required',
            'prenom'=> 'required',
            'sexe'=> 'required',
            'tel'=> 'required'
        ]);

        $requestData = $request->all();
        if($request->hasFile('Contratcadre_pj'))
         {
            checkDirectory("formateurs");
                $requestData['Contratcadre_pj'] =uploadFile($request,'Contratcadre_pj',public_path('uploads/formateurs'));
        }

        if ($request->hasFile('cv_pj')) {
            checkDirectory("formateurs");
            $requestData['cv_pj'] = uploadFile($request,'cv_pj', public_path('uploads/formateurs'));
        }



        Formateur::create($requestData);

        return redirect('formateurs')->with('flash_message', 'Formateur added!');
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
        $formateur = Formateur::findOrFail($id);

        return view('formateurs.show', compact('formateur'));
    }
    public function showprofile()
    {
        $id=Auth::guard('formateur')->user()->id;
        $formateur = Formateur::findOrFail($id);

              return view('formateurs.show', compact('formateur'));
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
        $modules=Module::all();
        $formateur = Formateur::findOrFail($id);
        return view('formateurs.edit', compact('formateur','modules'));
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

        $formateur = Formateur::findOrFail($id);
        $formateur->update($requestData);

        return redirect('formateurs')->with('flash_message', 'Formateur updated!');
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
        Formateur::destroy($id);

        return redirect('formateurs')->with('flash_message', 'Formateur deleted!');
    }
}
