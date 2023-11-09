<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TableRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class IndexController extends Controller
{
    public function __invoke(TableRequest $request)
    {


        $data =  $request->validated();

        $user = User::where('email', $data['email'])->first();
        if($user) return response(['mes' => 'error']);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = \auth()->tokenById($user->id);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
            'token' => $token
        ]);


    }
}
