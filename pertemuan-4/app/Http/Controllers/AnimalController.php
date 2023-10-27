<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AnimalController extends Controller
{
    # property animals
    public $animals;

    # method index - menampilkan data animals
    public function index()
    {
        # Buat property atau variabel
        $animal = ["Ayam", "Ikan"];
        
        # gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->animals as $animal){
            return $animal;
        }

        # Buat objek
        $animal->index();
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($animal, Request $request)
    {
        # gunakan method array_push 
        # untuk menambahkan data baru
        # $array untuk menerima data yang baru ditambahkan 
        array_push($this->animals, $request->nama); 

        # buat objek baru
        $animal->store('Burung');
        $animal->index();

    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $animal, Request $request)
    {
        $this->animals[$index] = $request->nama;

        $animal->update(0, 'Ikan');
        $animal->index();
        
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index, $animal, Request $request)
    {
        # gunakan method unset atau array_splice 
        # untuk menghapus data array
        # array_splice untuk menghapus data array 
        # sekaligus iterasi nya atau indeks nya
        array_splice($this->animals, $index, 1);
        #parameter 1 buat menentukan jumlah array yg dihapus

        $animal->destroy('Burung');
        $animal->index();
    }
}
