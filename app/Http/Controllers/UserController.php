<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'nim' => 'required|string|max:255',
            'kelompok' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'nim' => $request->nim,
            'kelompok' => $request->kelompok,
        ]);

        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'role' => 'sometimes|required|string|max:255',
            'password' => 'sometimes|required|string|min:6',
            'nim' => 'sometimes|required|string|max:255',
            'kelompok' => 'sometimes|required|string|max:255',
        ]);

        if ($request->input('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->fill($request->all());
        $user->save();

        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }
}
