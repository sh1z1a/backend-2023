<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menggunakan model student untuk select data
        $student = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $student
        ];

        return response()->json($data, 200);
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
        // menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        // menggunakan model student untuk insert data
        $student = Student::create($input);

        $data = [
            'message' => 'Student is created successfully',
            'data' => $student,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
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

    /**`
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        // cek data student
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
    
        // Update data student
        $student->nama = $request->nama;
        $student->nim = $request->nim;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;
        $student->save();
    
        $data = [
            'message' => 'Student is updated successfully',
            'data' => $student,
        ];
    
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // cari data students berdasarkan id
        $student = Student::find($id);

        // cek data student
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        // hapus data
        $student->delete();

        $message = [
            'message' => 'Student is deleted successfully',
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($message, 200);
    }
}
