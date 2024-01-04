// import model student
const Student = require('../models/Student.js')

// TODO 3: Import data students dari folder data/students.js
// const students = require("../data/students.js")

// Membuat Class StudentController
class StudentController {
    
    // memberi keyword async memberitahu proses asnchronous
    async index(req, res) {
      // memanggil method static all
      const students = await Student.all(); 
      // Tampilkan data students
      const data = {
        message: "Menampilkan Semua Students",
        data: students,
      }

      // agar responnya berupa json
      res.json(data);
    };
    
      
      
    
  
    store(req, res) {
      // TODO 5: Tambahkan data students
      // akan request di dalam body dan berupa nama/ {nama}
      const { nama } = req.body;
      students.push(nama);

      const data = {
        message: 'Menampilkan Data Student : ${nama}',
        data: students,
      }

      // agar responnya berupa json
      res.json(data);
    }
  
    update(req, res) {
      // TODO 6: Update data students
      const { id } = req.params;
      const { nama } = req.body;

      students[ id ] = nama;

      const data = {
        message: 'Mengedit Data Student : index ${id}',
        data : students,
      }

      res.json(data);
    }
  
    destroy(req, res) {
      // TODO 7: Hapus data students
      const { id } = req.params;

      // splice untuk menghapus index
      // argumen pertama itu mendefinisikan apa yang ingin dihapus yaitu id
      // sedangkan argumen kedua itu berapa data yang ingin dihapus misal kalau 2 berarti 2 data yang terhapus
      students.splice(id, 1);
      const data = {
        message: 'Menghapus Data Student : index ${id}',
        data : students,
      }

      res.json(data);
    }
  }
  
  // Membuat object StudentController
  const object = new StudentController();
  
  // Export object StudentController
  module.exports = object;