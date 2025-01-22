<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{
    public function searchSearch() {


        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }
        // return   $keyword ;
        $users = User::when($keyword, function ($query, $keyword) {
            return $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%')
                  ->orWhere('email', 'like', '%' . $keyword . '%'); // Example
            });
        })->paginate(10);
        // return  $users;

        return view('admin.usernew.index',compact('users'));

    }
}
