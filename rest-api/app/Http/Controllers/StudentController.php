<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students,
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];

        $student = Student::create($input);

        $data = [
            'message' => 'Student created',
            'data' => $student,
        ];

        return response()->json($data, 201);
    }

    public function update(Request $request, $id) {
        // menangkap data request
        $input = [
            'nama'=> $request->nama,
            'nim'=> $request->nim,
            'email'=> $request->email,
            'jurusan'=> $request->jurusan
            ];
        
        // menggunakan model student untuk mengambil data (id) yang akan di update
        $student = Student::where('id', $id)->update($input);

        $data = [
            'message'=> 'Data siswa telah berhasil di perbaharui',
            'data'=> $student,
        ];

        // mengembalikan dalam bentuk data json dan kode 200 (success)
        return response()->json($data, 200);
    }

    public function destroy($id) {

        $student = Student::where('id', $id)->destroy();

        $data = [
            'message'=> 'Data siswa berhasil dihapus',
            'data'=> $student,
        ];

        return response()->json($data, 200);
    }
}

/**
 * Nama     : Hasna Azizah 
 * Kelas    : SE03 / TI02
 * NIM      : 0110222235
 */
