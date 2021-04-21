<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Nosmatiere;
use App\Mark;
use App\Apprenant;
use App\Module;
use App\Filiere;
use App\Classe;
use Illuminate\Http\Request;

class MarksController extends Controller
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
            $data = Mark::latest()->paginate($perPage);
        } else {
            $data = Mark::latest()->paginate($perPage);
        }
        $classes=Classe::pluck('name','name')->all();
        // $data=Mark::all();
        return view('marks.index', compact('data','classes'));
    }


    public function search(Request $request)
    {
        if($request->ajax())
            {
                $output="";
                $classes=DB::table('classes')->where('name','LIKE','%'.$request->search."%")->get();
            }
            if($classes)
                {
                    foreach ($classes as $key => $classe) {
                    $output.='<tr>'.
                    '<td>'.$classe->id.'</td>'.
                    '<td>'.$classe->apprenant->nom.''.$classe->apprenant->prenom.'</td>'.
                    '<td>'.$classe->matiere-.'</td>'.

                    '<td>'.$classe->name.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>';



                    }


            }

        }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    // public function create()
    // {
    //     return view('.create');
    // }

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

        Mark::create($requestData);
        return redirect('marks')->with('flash_message', 'Note ajouté!');
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
        $mark = Mark::findOrFail($id);

        return view('.show', compact('mark'));
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
        $mark = Mark::findOrFail($id);
        return view('.edit', compact('mark'));
    }


    public function releve()
        {
            $apprenants=Apprenant::all();
            $filieres=Filiere::all();
            $matieres=Nosmatiere::all();
            $modules=Module::all();
            return view('releves.individuel.create', compact('filieres','apprenants','matieres','modules'));
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

        // $requestData = $request->all();
            if($request->ajax()){

            }

            $mark = Mark::find($request->input('pk'))->update([$request->input('note1') => $request->input('value')]);
        $mark->update($requestData);

        return response()->json(['succes'=>true]);
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
        Mark::destroy($id);
        return redirect('')->with('flash_message', 'note supprimée!');
    }
}
