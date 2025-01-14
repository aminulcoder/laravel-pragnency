<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
        ]);

        $user = User::create([
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
        ]);

        return response()->json($user);
    }

    public function login(Request $request)  {

        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                // return $user;
               $token= $user->createToken(uniqid())->plainTextToken;


                return response()->json([
                    'data' => $user,
                    'token' => $token
                ]);

            } else {
                return response()->json([
                    'message' => 'somethins went wrong'
                ]);
            }
        } catch (\Throwable $th) {
            // response()->json($th);

        }

    }
}
