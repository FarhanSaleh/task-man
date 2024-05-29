<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->where('del', 0)
            ->where('id', '!=', Auth::id())
            ->get();

        return view('userData.index', [
            'users' => $users
        ]);
    }
    public function show($id)
    {
        $users = User::query()
            ->where('id', $id)
            ->firstOrFail();

        return view('userData.show', [
            'users' => $users
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'conf-password' => ['required', 'same:password']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 0,
            'del' => 0
        ]);

        return redirect('/login')->with(['success' => 'Registrasi akun berhasil!']);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with(['success' => 'Data berhasil diedit!']);
    }
    public function updatePassword(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'password-old' => ['required'],
            'password' => ['required', 'min:8'],
            'conf-password' => ['required', 'same:password']
        ]);

        $user = User::findOrFail($id);

        if (!Hash::check($request->input('password-old'), $user->password)) {
            return back()->with(['error' => 'Password lama tidak sesuai.']);
        }
    
        $user->update([
            'password' => $request->password
        ]);

        return back()->with(['success' => 'Password berhasil diganti!']);
    }
    public function role($id, $role): RedirectResponse
    {
        $task = User::findOrFail($id);

        $task->update([
            'role' => $role
        ]);

        return back();
    }
}
