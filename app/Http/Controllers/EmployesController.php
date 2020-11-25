<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Document;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Models\DocumentType;
use App\Models\EmployeDocument;
use App\Models\Gender;
use App\Models\City;
use App\Models\Country;


class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $employes = Employe::where('firstname', 'like', "%$keyword%")
            ->orWhere('last_name', 'like', "%$keyword%");
        } else {
            $employes = Employe::latest();
        }
         if(\request('gender_id') != null) {
            $employes= Employe::where('gender_id', \request('gender_id'));
        }
        if(\request('added_by') != null) {
            $employes= Employe::where('added_by', \request('added_by'));
        }


        // if not admin user show contacts if assigned to or created by that user
       /*  if(Auth::user()->is_admin == 0) {

            $employes= Employe::where(function ($query) {
                $employes= Employe::where('added_by', Auth::user()->id);
            });
        }
 */$employes = Employe::paginate($perPage);
        return view('pages.employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $empcities = City::all();
        $empcountries = Country::all();
        $empgenders = Gender::all();
        $empusers = User::all();
        $employes = Employe::all();
        return view('pages.employes.create',compact('employes','empusers','empcities','empcountries','empgenders'));
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
        $request -> validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'picture'=> 'image|mimes:jpeg,png,jpg,gif'
        ]);

        if ($request->hasFile('picture')) {
            checkDirectory("user");
            $requestData['picture'] = uploadFile($request,'picture', public_path('uploads/users'));
        }



         $requestData = $request->all();

        Employe::create($requestData);

        return redirect('admin/employes')->with('flash_message', 'Employe enrégistré!');
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
        $employe = Employe::findOrFail($id);

        return view('pages.employes.show', compact('employe'));
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
        $employes = Employe::findOrFail($id);
        $empusers = User::all();
        $empcities = City::all();
        $empcountries = Country::all();
        $empgenders = Gender::all();
        return view('pages.employes.edit', compact('employes','empusers','empcities','empcountries','empgenders'));
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

        $employe = Employe::findOrFail($id);
        $employe->update($requestData);

        return redirect('admin/employes')->with('flash_message', 'Employe mis à jour!');
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
        Employe::destroy($id);
        return redirect('admin/employes')->with('flash_message', 'Employe supprimé!');
    }
}
