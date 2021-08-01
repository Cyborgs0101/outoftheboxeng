// This script will generate 25 images of cats in gallery --- Nothing else

const getRandomSize = (min, max) => Math.round(Math.random() * (max - min) + min);

let allImages = "";

for (let i = 0; i < 25; i++) {
  const width = getRandomSize(200, 400);
  const height = getRandomSize(200, 400);
  allImages += `<img src="https://placekitten.com/${width}/${height}" alt="hello">`;
}

$('#photos').append(allImages);