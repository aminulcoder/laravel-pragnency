<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('admin list')){
            abort(403);
        }

        $admins = User::latest()->paginate(10);
        // return $admins;
        return view('admin.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()->can('admin create')){
            abort(403);
        }
        $roles = Role::all();
        return view('admin.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed', 'min:4'],
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ];
        // return $data;
        $ids = array_map('intval', $request->role_ids);
        $user = User::create($data);
        $user->assignRole($ids);
        return redirect()->route('admin.index')->with('create',' Admin Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::user()->can('admin show')){
            abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::user()->can('admin update')){
            abort(403);
        }
        $admin = User::where('id', $id)->first();
        $roles = Role::all();
        return view('admin.admin.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!Auth::user()->can('admin update')){
            abort(403);
        }
        $ids = array_map('intval', $request->role_ids);
        $admin = User::firstWhere('id', $id);

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        if ($request->role_ids) {
            $admin->roles()->detach();
            $admin->assignRole($ids);
        }

        return redirect()->route('admin.index')->with('warning',' Admin Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::user()->can('admin delete')){
            abort(403);
        }
        User::where('id', $id)->delete();
        return redirect()->route('admin.index');
    }
}
