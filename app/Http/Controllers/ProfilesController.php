<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        // Get user model from App/Models/User
        $user = User::findOrFail($user);

        // Display user details in view
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
