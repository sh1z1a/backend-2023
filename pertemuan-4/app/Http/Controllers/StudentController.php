<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // mengimport model student untuk berinteraksi dgn databse
use App\Models\Student as ModelsStudent;

class StudentController extends Controller
{
    // membuat method index
    public function index(){
        // menampilkan data students dari database
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        // mengirim data (json) dan kode 200
        return response()->json($data, 200);
    }

    public function store(Request $request){
        // menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        // menggunakan model Student untuk insert data
        $student = Student::create($input);

        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
    }

}
