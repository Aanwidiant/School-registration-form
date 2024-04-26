const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-file");
const imageView = document.getElementById("img-view");

inputFile.addEventListener("change", uploadImage);

function uploadImage() {
  let imgLink = URL.createObjectURL(inputFile.files[0]);
  imageView.style.backgroundImage = `url(${imgLink})`;
  imageView.textContent = "";
  imageView.style.border = 0;
}

dropArea.addEventListener("dragover", function (e) {
  e.preventDefault();
});
dropArea.addEventListener("drop", function (e) {
  e.preventDefault();
  inputFile.files = e.dataTransfer.files;
  uploadImage();
});

const form = document.forms["registration-form"];

function resetImageView() {
  imageView.style.backgroundImage = "";
  imageView.innerHTML = '<img src="upload-cloud.svg"><p>Drag and drop or click here <br> to upload image</p><span>Upload images from desktop</span>';
  imageView.style.border = "2px dashed black";
}

form.addEventListener("submit", function (event) {
  setTimeout(() => {
    form.reset();
    resetImageView();
  }, 1000);
});
