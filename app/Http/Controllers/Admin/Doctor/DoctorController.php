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
        $doctors = Doctor::latest()->paginate(10);
        // return  $doctors;
        return view('admin.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::latest()->paginate(10);
        return view('admin.doctor.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'username'=>'required'
        ]);
        $data=[
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'designation' => $request->designation,
            'bio_data' => $request->bio_data,
            'type' => $request->type,
            'email' => $request->email,

        ];
        if($request->file('photo')){
            $file_name = $request->file('photo')->store('photo/doctor');
            $data['photo'] = $file_name;
        }
        Doctor::create($data);
        Session::flash('create');
        return redirect()->route('doctor.index')->with('create',' Doctor Successfully Created');
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
        $doctor = Doctor::where('id', $id)->first();
        return view('admin.doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'username'    => $request->username,
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'designation' => $request->designation,
            'bio_data'    => $request->bio_data,
            'type'        => $request->type,
            'email'       => $request->email,
        ];
        if($request->file('photo')){
            $file_name = $request->file('photo')->store('photo/doctor');
            $data['photo'] = $file_name;
        }


        Doctor::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('doctor.index')->with('warning',' Doctor Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Doctor::where('id', $id)->delete();
        return redirect()->route('doctor.index');
    }



}
