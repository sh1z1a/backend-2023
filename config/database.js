// import mysql
const mysql = require('mysql');

/**
 * Membuat koneksi database menggunakan method createConnection
 * Method menerima parameter object: host, user, password, database
 */

// destructing object process .env
const { 
  DB_HOST, 
  DB_USERNAME, 
  DB_PASSWORD, 
  DB_DATABASE 
} = process.env

// update konfigurasidatabase dari file .env
const db = mysql.createConnection({
  host: DB_HOST,
  user: DB_USERNAME,
  password: DB_PASSWORD,
  database: DB_DATABASE
});

/**
 * Menghubungkan ke database menggunakan method connect
 * Menerima parameter callback
 */
db.connect((err)=> {
  if(err){
    console.log("Error connecting" + err.stack);
    return;
  } else {
    console.log("Connected to database");
    return;
  }
});

module.exports = db;