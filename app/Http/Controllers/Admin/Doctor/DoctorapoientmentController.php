<?php
namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class DoctorapoientmentController extends Controller
{

    public function doctorList()
    {

        $doctors = Doctor::latest()->paginate(10);
        // return  $doctors;
        return view('admin.doctor.doctorlist', compact('doctors'));
    }

    public function doctorProfile($id)
    {

        $doctor = Doctor::where('id', $id)->first();

        return view('admin.doctor.doctorprofile', compact('doctor'));

    }

}
