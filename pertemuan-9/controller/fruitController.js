/**
 * TODO 3:
 * - import fruits dari fruits.js
 * - refactor variable ke ES6 variable
 */
const fruits = require("../data/fruits.js");

/**
 * TODO 4:
 * - Buat method index.
 * - Refactor function ke ES6 Arrow Function
 * - Tampilkan data fruits.
 *
 * @hint - Gunakan looping for of
 */

// function index() {
//   for (const fruit of fruits){
//     console.log(fruit);
//   }
// }

// arrow function 
const index = () => {
  for (const fruit of fruits){
    console.log(fruit);
  }
}

/**
 * TODO 5:
 * - Buat method store.
 * - Refactor function ke ES6 Arrow Function
 * - Menambahkan data baru ke array fruits.
 *
 * @param {string} name - Nama buah.
 *
 * @hint - Gunakan method push
 */
const store = (name) => {
  fruits.push();
}


/**
 * TODO 6:
 * - Buat method update.
 * - Refactor function ke ES6 Arrow Function
 * - Memperbarui data fruits.
 *
 * @param {number} position - Posisi atau index yang ingin diupdate.
 * @param {string} name - Nama buah yang baru.
 */
const update = (position, name) => {
  fruits[position] = name;
  index();
}

/**
 * TODO 7:
 * - Buat method destroy.
 * - Refactor function ke ES6 Arrow Function
 * - Menghapus data fruits.
 *
 * @param {number} position - Posisi atau index yang ingin dihapus
 *
 * @hint - Gunakan method splice
 */
const destroy = (position) =>{
  fruits.splice(position,1);
  index();
}

/**
 * TODO 8: export method index, store, update, dan destroy
 */
module.exports = {index,store,update,destroy};