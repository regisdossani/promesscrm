<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Image;
use App\Candidat;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CandidatsController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



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
            $candidats = Candidat::latest()->paginate($perPage);
        } else {
            $candidats = Candidat::latest()->paginate($perPage);
        }

        return view('candidats.index', compact('candidats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('candidats.create');
    }
    public function success()
    {
        return view('welcome')->with('flash_message', 'Votre dossier a été envoyé !');
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

            'test_pj.*' => 'mimes:doc,docx,pdf,txt',
            'pj_depotdossier.*' => 'mimes:doc,docx,pdf,txt',
            'pj_depotdossier2.*' => 'mimes:doc,docx,pdf,txt'

            ]);
            $requestData = $request->all();


            if ($request->hasFile('pj_depotdossier2')) {
                checkDirectory("candidats");
                $requestData['pj_depotdossier2'] = uploadFile($request,'pj_depotdossier2', public_path('uploads/candidats'));
            }

            if ($request->hasFile('pj_depotdossier')) {
                checkDirectory("candidats");
                $requestData['pj_depotdossier'] = uploadFile($request,'pj_depotdossier', public_path('uploads/candidats'));
            }



            if ($request->hasFile('test_pj')) {
                checkDirectory("candidats");
                $requestData['test_pj'] = uploadFile($request, 'test_pj', public_path('uploads/candidats'));
            }
            

  Candidat::create($requestData);


        // session()->flash('msg', 'Successfully done the operation. ');
        // return url()->previous();
                  return redirect()->to('/candidats')->with('flash_message', 'Votre dossier a été envoyé !');
                    // return redirect()->route('/');

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
        $candidat = Candidat::findOrFail($id);

        return view('candidats.show', compact('candidat'));
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
        $candidat = Candidat::findOrFail($id);

        return view('candidats.edit', compact('candidat'));
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

        $candidat = Candidat::findOrFail($id);
        $candidat->update($requestData);

        return redirect('candidats')->with('flash_message', 'Candidat updated!');
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
        Candidat::destroy($id);

        return redirect('candidats')->with('flash_message', 'Candidat deleted!');
    }
    public function inscription(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom'=> 'required',
            'tel'=> 'required',

            'pj_depotdossier.*' => 'mimes:doc,docx,pdf,txt'

            ]);
            $requestData = $request->all();

            if ($request->hasFile('pj_depotdossier')) {
                checkDirectory("candidats");
                $requestData['pj_depotdossier'] = uploadFile($request, 'pj_depotdossier', public_path('uploads/candidats'));
            }
            if ($request->hasFile('pj_depotdossier2')) {
                checkDirectory("candidats");
                $requestData['pj_depotdossier2'] = uploadFile($request, 'pj_depotdossier2', public_path('uploads/candidats'));
            }

            if ($request->hasFile('test_pj')) {
                checkDirectory("candidats");
                $requestData['test_pj'] = uploadFile($request, 'test_pj', public_path('uploads/candidats'));
            }


  Candidat::create($requestData);



                    return redirect('candidat')->with('flash_message', 'Votre dossier a été envoyé !');

                }


}
