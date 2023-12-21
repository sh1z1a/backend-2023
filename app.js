// inport express
const express = require('express');

// import router
const router = require("./routes/api.js")

// membuat objek express
const app = express();

// menggunakan middleware
app.use(express.json());
app.use(express.urlencoded());

// menggunakan routing (router)
app.use(router);

// mendifiniskan port 
app.listen(3000);

// mendefinisikan routing
// app.get('/', (req, res) =>{
//     res.send('Hello Express!'); 
// });



/*
app.get("/students", (req,res) => {
    res.send("Menampilkan semua students")
});

app.post("/students", (req,res) => {
    res.send("Menambahkan data students")
});

app.put("/students", (req,res) => {
    res.send("Mengedit students")
});

app.delete("/students", (req,res) => {
    res.send("Mengedit students")
});
*/