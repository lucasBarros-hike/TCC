<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\View\View;
use App\Http\Requests\CadastroRequest;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return View('signUp');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CadastroRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());

        auth()->login($user);

        // $data = $request->validate([
        //     'username' => 'string|required|max:255',
        //     'email' => 'string|required|max:255',
        //     'password' => 'string|required|max:255',
        // ]);

        // User::create([
        //     'name' => $request->username,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);



        return Redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
