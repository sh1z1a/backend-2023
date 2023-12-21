// import express
const express = require ("express");

// import student controller
const StudentController = require("../controllers/StudentController")

// membuat object router
const router = express.Router();

// route student
router.get("/", (req, res) => {
  res.send("Hello Express");
});



// route stuemts
router.get("/sudents", StudentController.index);
router.get("/sudents", StudentController.store);
router.get("/sudents/:id", StudentController.update);
router.get("/sudents/:id", StudentController.destroy);

//  export router
module.exports = router;

