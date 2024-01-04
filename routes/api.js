const express = require("express");

// import student controller
// controller dulu baru ke router, jadi ambil data dulu baru route nya
const StudentController = require("../controllers/StudentController")

// object router
const router = express.Router();

// buat route nya 
router.get("/", (req, res) => {
    res.send("Hello Express");
});

// route students
router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.destroy);

// export
module.exports = router;