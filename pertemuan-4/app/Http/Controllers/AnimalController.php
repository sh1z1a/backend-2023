<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{
    # property animals
    public $animals = ["Kucing", "Kelinci", "Ayam"];

    # method index - menampilkan data animals
    public function index()
    {
        echo "Menampilkan data animals";
        echo "<br>";
        foreach ($this->animals as $animal)
        {
            echo $animal;
            echo "<br>";
        }

        $animal->index();
    }

    // request itu dipakai karna kita ngambil dri api, request itu fungsi bawaan laravel
    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($animal, Request $request)
    {
        echo "Menambahkan hewan baru";
        echo "<br>";
        echo "Nama hewan : " , array_push($this->animals, $request->nama);
        echo "<br>";
        $animal->store('Angsa');
        $this->index();

    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($animal, Request $request, $id )
    {
        // echo "Nama hewan : ", $this->animals[$index] = $request->nama;
        // echo "<br>";
        // echo "Mengupdate data animals id $id";
        // echo "<br>";
        // $this->index();

        $index = $id - 1;

        if (isset($this->animals[$index])) {
            $this->animals[$index] = $request->nama;
            echo "Nama hewan : " . $this->animals[$index];
            echo "<br>";
            echo "Mengupdate data animals id $id";
        } else {
            echo "Hewan dengan $id tidak ditemukan.";
        }
        echo "<br>";
        $animal->update(1, "Bebek");
        $this->index();


        
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($animal, $index, Request $request, $id)
    {
        # gunakan method unset atau array_splice 
        # untuk menghapus data array
        # array_splice untuk menghapus data array 
        # sekaligus iterasi nya atau indeks nya
        array_splice($this->animals, $index, 1); #parameter 1 buat menentukan jumlah array yg dihapus
        echo "Menghapus data hewn id $id";

        $animal->destroy($id);
        $animal->index();
    }
}

/**
 * Nama     : Hasna Azizah 
 * Kelas    : SE03 / TI02
 * NIM      : 0110222235
 */
