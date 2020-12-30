<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Professionnel;
class ProfessionnelsController extends Controller
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
            $professionnels = Professionnel::latest()->paginate($perPage);

        } else {
            $professionnels = Professionnel::latest()->paginate($perPage);
        }

        return view('professionnels.index', compact('professionnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('professionnels.create');
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
            'tel_1'=> 'required',
            'tel_2'=> 'required',
            'nature_activite'=> 'required',
            'nature_commentaire'=> 'required',
            'nombre_employe'=> 'required',
            'exemple_realisation'=> 'required',
            'email_1' => 'required|email|unique:candidats,email_1',
            // 'avatar' => ['sometimes','image','mimes:jpg,jpeg,bmp,svg,png', 'max:5000'],
            'pjexemple_realisation.*' => 'mimes:doc,docx,pdf,txt',
            ]);


        $requestData = $request->all();
        if ($request->hasFile('pjexemple_realisation')) {
            checkDirectory("professionnels");
            $requestData['pjexemple_realisation'] = uploadFile($request, 'pjexemple_realisation',public_path('uploads/professionnels'));
        }

        // $requestData['date_naiss']= \Carbon\Carbon::parse($requestData['date_naiss'])->format('d/m/Y');

Professionnel::create($requestData);

        return redirect('professionnels')->with('flash_message', ' professionnel crée!');
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
        $professionnel =Professionnel ::findOrFail($id);

        return view('professionnels.show', compact('professionnel'));
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
        $professionnel =Professionnel ::findOrFail($id);

        return view('professionnels.edit', compact('professionnel'));
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

        $professionnel =Professionnel ::findOrFail($id);
        $professionnel->update($requestData);

        return redirect('professionnels')->with('flash_message', ' updated!');
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
        Professionnel::destroy($id);

        return redirect('professionnels')->with('flash_message', ' deleted!');
    }
}
