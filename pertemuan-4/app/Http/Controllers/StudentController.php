<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // mengimport model student untuk berinteraksi dgn databse


class StudentController extends Controller
{
    // membuat method index
    public function index($student){
        // menampilkan data students dari database
        $students = Student::all();

        if($students){
             $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        return response()->json($data, 200);

        }

        if($students->isEmpty()){
            $data = [
                "message" => "Data not found",
                "data" => []
            ];
            return response()->json($data, 200);
        }

        else{
            $data = [
                "message" => "Data not found",
                "data" => []
            ];
            return response()->json($data, 404);
        }

    }

    public function store(Request $request, $input){

        // $request->validate([
        //     "nama" => "required",
        //     "nim" => "required",
        //     "email" => "required | email",
        //     "jurusan" => "required"
        // ]);

        // menangkap data request
        // $input = [
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ];

        $validateData = $request->validate([
            'nama'=>'required',
            'nim'=>'numeric|required',
            'email'=>'email|required',
            'jurusan'=>'required',
        ]);

        // menggunakan model Student untuk insert data
        $student = Student::create($validateData);

        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);

        // menghandle data yang tidak ada
        if($student){
            // menangkap data request
            $input = [
                'nama' => $request-> nama ?? $student->nama,
                'nim' => $request -> nim ?? $student->nim,
                'email' => $request -> email ?? $student->email,
                'jurusan' => $request -> jurusan ?? $student->nim
            ];

            // melakukan update data
            $student->update($input);

            $data = [
                'message' => 'Student is updated',
                'data' => $student
            ];

            // mengembalikan data (json) dan kode 200
            return response()-> json($data, 200);
        }
        else {
            $data = [
                'message' => 'Student not found'
            ];

            return response()->json($data, 404);
        }
    }

    public function destroy($id){
        $student = Student::find($id);

        // menghandle data yg tidak ada
        if($student){
            // hapus student tersebut
            $student->delete();

            // buat tampilin data message
            $data = [
                'message' => 'Student is deleted'
            ];

            // mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        }
        else {
            $data = [
                'message' => 'Student not found',
                'data'=> $student
            ];

            return response()->json($data, 404);
        }
    }

    public function show($id){
        //  cari id student yang ingin didapatkan 
        $student = Student::find($id);

        if($student){
            $data = [
                'message'=> 'Get detail student',
                'data' => $student
            ];

            // mengembalikan data(json) dan kode 200
            return response()->json($data, 200);
        }
        else{
            $data = [
                'message' => 'Student not found',
            ];

            // mengembalikan data (json) dan kode 404
            return response()->json($data, 404);
        }
    }

}
