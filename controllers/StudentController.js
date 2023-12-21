
// TODO 3: Import data students dari folder data/students.js
// code here
const students = require("../data/students.js")

// Membuat Class StudentController
class StudentController {
  index(req, res) {
    // TODO 4: Tampilkan data students
    const data = {
      message: "Menampilkan semua students",
      data: students,
    }

    res.json(data)
  }

  store(req, res) {
    // TODO 5: Tambahkan data students
    const { nama } = req.body;
    students.push(nama);

    const data = {
      message: `Menambahkan data students : ${nama}`,
      data: students,
    }

    res.json(data)
  }

  update(req, res) {
    // TODO 6: Update data students
    const { id } = req.params;
    const { nama } = req.body;

    students[id] = nama;

    const data = {
      message: `Mengedit data students : index ${id}`,
      data: students,
    }

    res.json(data)

  }

  destroy(req, res) {
    // TODO 7: Hapus data students
    const { id } = req.params;
    students.splice(id, 1);

    const data = {
      message: `Menghapus data students : index ${id}`,
      data: students,
    }

    res.json(data)
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
