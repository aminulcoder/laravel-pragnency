<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorImageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if ($request->file('file')) {
                $file_name = $request->file('file')->store('editor');
                $data['thumbnail'] = $file_name;
            }
            return response()->json([
                'fileName' =>  $file_name,
                'uploaded' => 1,
                'location' => asset('storage/' . $file_name)
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
