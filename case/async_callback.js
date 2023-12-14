const persiapan = () => {
  console.log("Persiapan...");
}

const rebusAir = () => {
  console.log("Rebus Air...");
}

const masak = () => {
  console.log("Memasak mie...");
  console.log("Selesai");
}

const main = () => {
  setTimeout(()=>{
    persiapan();
    setTimeout(()=>{
      rebusAir();
      setTimeout(()=>{
        masak();
      }, 5000);
    }, 7000);
  }, 3000);
}