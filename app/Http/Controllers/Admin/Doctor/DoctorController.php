<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = User::latest()->paginate(10);
        return view('admin.doctor.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name'=>'required'
        ]);

        $data=[
            'social_id' => $request->social_id,
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->name,
            'age' => $request->age,
            'social_photo' => $request->social_photo,
            'child_number' => $request->child_number,
            'login_type' => $request->login_type,
            'user_type' => $request->user_type,
            'edd_date' => $request->edd_date,
            'edd_calculation_type' => $request->edd_calculation_type,
            'email' => $request->email,
            'language' => $request->language,
            'pregnancy_loss' => $request->pregnancy_loss,
            'pregnancy_loss_date' => $request->pregnancy_loss_date,
            'baby_already_born' => $request->baby_already_born,
            'bio_data' => $request->bio_data,
            'subscription' => $request->subscription,
            'lmp_date' => $request->lmp_date,
            'deleted' => $request->deleted,
            'deleted_date' => $request->deleted_date,
            'password' => $request->password,
            'status' => $request->status,


            // 'thumbnail' => $request->thumbnail,
        ];
        if($request->file('photo')){
            $file_name = $request->file('photo')->store('photo/user');
            $data['photo'] = $file_name;
        }
        User::create($data);
        Session::flash('create');
        return redirect()->route('user.index')->with('create',' User Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
