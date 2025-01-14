<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index()
    {
        // return User::get();
        return new UserCollection(User::paginate());
    }

    public function show($id)
    {
        // return User::firstWhere('id', $id);
        return new UserResource(User::firstWhere('id', $id));
    }
}
