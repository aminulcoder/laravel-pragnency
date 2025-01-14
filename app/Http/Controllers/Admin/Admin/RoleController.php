<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('role list')){
            abort(403);
        }
        $roles = Role::latest()->paginate(10);
        // return  $roles;
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if(!Auth::user()->can('role create')){
            abort(403);
        }
        $roles = Role::all();
        // return $roles;
        $permissions = Permission::all()->groupBy('module_name');
        // return $permissions;
        return view('admin.role.create', compact('roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate(
            ['name' => 'required', 'permission_ids']
        );
        $createdRole = Role::create(['name' => $request->name]);
        $permissions = array_map('intval', $request->permission_ids);
        $createdRole->syncPermissions($permissions);

        Session::flash('create');
        return redirect()->route('role.index')->with('create',' Role  Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::user()->can('role show')){
            abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::user()->can('role update')){
            abort(403);
        }
        $role = Role::where('id', $id)->first();
        $roles = Role::all();
        $permissions = Permission::all()->groupBy('module_name');
        $rolePermissions = $role->permissions()->pluck('id')->toArray();

        // return  $rolePermissions;
        return view('admin.role.edit',compact('role','roles','permissions','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        if(!Auth::user()->can('role update')){
            abort(403);
        }
        $role->update(['name' => $request->validated('name')]);
        $role->syncPermissions( array_map('intval', $request->validated('permission_ids')));
        return redirect()->route('role.index')->with('warning',' Role Successfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if(!Auth::user()->can('role delete')){
            abort(403);
        }
        $role->delete();
        return redirect()->route('role.index');
    }
}
