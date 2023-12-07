<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    // membuat fitur register
    public function register(Request $request, User $user ){

        // Menangkap inputan 
        $input= [
            'name'=>'$request->name',
            'email'=>'$request->email',
            'password'=>Hash::make($request->password)
        ];

        $user->
        // menginsert data ke table
        $user = User::create($input);

        $data = [
            'message' => 'User is created successfully'
        ];

        // mengirim response JSON
        return response()->json($data,200);
    }

    // Membuat fitur login 
    public function login(Request $request){

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
    public function store(Request $request)
    {
        //
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
