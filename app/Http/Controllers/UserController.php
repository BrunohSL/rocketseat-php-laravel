<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return User::query()->create([
            'name' => 'Ennio',
            'email' => 'teste6@teste.com',
            'password' => 'root'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return User::find(1);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
