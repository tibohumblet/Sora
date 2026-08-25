<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index(): View
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }
    
    public function show($id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $req)
    {
        $val = $req->validate([
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        User::create($val);

        return redirect()
            ->route('user.index')
            ->with('success', 'User Created successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', "User: {$user->name} deleted successfully");
    }
}