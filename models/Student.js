// import database
const db = require('../config/database');

// membuat class model Student
class Student{
  /**
   * Membuat method static all.
  */
  static all(callback){
    return new Promise((resolve, reject) =>{
      const query = `SELECT * FROM students`;
      /**
       * Melakukan query menggunakan method query.
       * Menerima 2 params: query dan callback
       */
      db.query(query, (err, result)=> {
        resolve(results);
      });
    });
  }
}

// export class Student
module.exports = Student;