<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;




class RolesController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'admin']);//isAdmin middleware lets only users with a //specific permission permission to access these resources.
    }


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
            $roles = Role::latest()->paginate($perPage);
        } else {
            $roles = Role::latest()->paginate($perPage);
        }

        return view('pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('pages.roles.create', compact('permissions'));
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
        //Validate name and permissions field
        $this->validate($request, [
            'name'=>'required|unique:roles|max:20',
            'permissions' =>'required',
            ]
        );

        $role = Role::create(['name'=>$request->role]);
        $permissions = $request['permissions'];

    //Looping thru selected permissions
       /*  foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail();
         //Fetch the newly created role and assign permission
            $role = Role::where('name', '=', $name)->first();
            $role->givePermissionTo($p);
        } */


        return redirect('admins/roles')->with('flash_message', 'Role'. $role->name.' added!');
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
        $role = Role::findOrFail($id);
        return view('pages.roles.show', compact('role'));
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
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        $selected_permissions = [];
        foreach ($role->permissions as $permission) {
            array_push($selected_permissions, $permission->id);
        }

        return view('pages.roles.edit', compact('role', 'permissions', 'selected_permissions'));
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
        $role = Role::findOrFail($id);//Get role with the given id
        //Validate name and permission fields
            $this->validate($request, [
                'name'=>'required|max:20|unique:roles,name,'.$id,
                'permissions' =>'required',
            ]);

            $input = $request->except(['permissions']);
            $permissions = $request['permissions'];
            $role->fill($input)->save();

            $p_all = Permission::all();//Get all permissions

            foreach ($p_all as $p) {
                $role->revokePermissionTo($p); //Remove all permissions associated with role
            }

            foreach ($permissions as $permission) {
                $p = Permission::where('id', '=', $permission)->firstOrFail(); //Get corresponding form //permission in db
                $role->givePermissionTo($p);  //Assign permission to role
            }

    return redirect('admin/roles')->with('flash_message','Role'. $role->name.' updated!');
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
        Role::destroy($id);
        return redirect('admin/roles')->with('flash_message', 'Role deleted!');
    }

}
