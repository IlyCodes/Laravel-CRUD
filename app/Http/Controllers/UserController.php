<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $email = $data['email'];
        $userEmail = User::where('email', $email)->first();

        if($userEmail) {
            return redirect()->back()->with('error', 'Email address already exist!');
        }

        User::create($data);
        return redirect()->to('/users')->with('success', 'User added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        $data = $request->all();
        $email = $data['email'];
        $userEmail = User::where('email', $email)->first();

        if($userEmail != $user) {
            return redirect()->back()->with('error', 'Email address already exist!');
        }

        $user->update($data);
        return redirect()
            ->back()
            ->with('success', 'User information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        
        return redirect()->to('/users')->with('success', 'User deleted successfully!');
    }
}
