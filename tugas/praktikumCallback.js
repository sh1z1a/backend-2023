/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - Nama file yang didownload
 */
const showDownload = (result) => {
  console.log("Download selesai");
  console.log(`Hasil Download: ${result}`);
}

/**
 * Fungsi untuk download file
 * @param {function} callback - Function callback show
 */
// const download = (callShowDownload) => {
//   setTimeout(function () {
//     const result = "windows-10.exe";
//     callShowDownload(result);
//   }, 3000);
// }

/**
 * Buat Promise baru didalam fungsi download yang menerima parameter resolve
 * Hapus parameter showDownload dari function download
 */
const download = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const result = "windows-10.exe";
      resolve(result);
    }, 3000);
  })
  }

/**
 * Panggil fungsi download dan showDownload menggunakan promise
 */
download()
  .then(showDownload);

/**
   * Buat function main yang memanggil fungsi async
	 * Panggil showDownload dan beri parameter download untuk menunggu download selesai
	 * Panggil fungsi main
   */

const main = async () => {
  try {
    showDownload(await download());
  } catch (error) {
    console.error("Error during download:", error);
  }
};

main();

/**
 * Pastikan fungsi showDownload sudah bentuk arrow function
 */
/**
 * TODO:
 * - Refactor callback ke Promise atau Async Await
 * - Refactor function ke ES6 Arrow Function
 * - Refactor string ke ES6 Template Literals
 */