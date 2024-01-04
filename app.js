// import express
const express = require('express');
// buat object express
const app = express();

// import router
const router = require("./routes/api");

// definisikan code untuk merubah data ke json
app.use(express.json());
app.use(express.urlencoded());

// use route
app.use(router);

// mendefinisikan port
app.listen(3000);

// // mendefinisikan route
// app.get('/', (req, res) => {
//     res.send('Halo Express!');
// });
