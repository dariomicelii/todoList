<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users",
            "password" => "required|string|min:6|confirmed",
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => Hash::make($data["password"]),
        ]);

        return response()->json($user);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required|string",
        ]);

        if (!Auth::attempt($data)) {
            return response()->json(["message" => "Credenziali non valide"], 401);
        }

        $token = $request->user()->createToken("api-token")->plainTextToken;

        return response()->json([
            "token" => $token,
            "user" => $request->user(),
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(["message" => "Logout effettuato"]);
    }

    public function me(Request $request)
    {
        return response()->json($request->user());
    }
}
