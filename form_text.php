<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    </style>
</head>

<body>
    <section>
        <div class="cardMe py-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>School Registration Form</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form name="registration-form" method="POST" action="proses_text.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap:</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" required />
                            </div>
                            <div class="mb-3">
                                <label for="usia" class="form-label">Usia:</label>
                                <input type="number" class="form-control" id="usia" aria-describedby="usia" name="usia" required />
                            </div>
                            <div class="mb-3">
                                <label for="notel" class="form-label">Nomer Handphone:</label>
                                <input type="tel" class="form-control" id="notel" aria-describedby="notel" name="notel" pattern="[0-9]{10,12}" required />
                            </div>
                            <div class="mb-3 text-center">
                                <label for="input-file" class="form-label text-start">Scan Kartu Keluarga:</label>
                                <div class="drop-area-div">
                                    <label for="input-file" id="drop-area">
                                        <input type="file" accept="image/*" id="input-file" name="fileToUpload" required hidden>
                                        <div id="img-view">
                                            <img src="upload-cloud.svg">
                                            <p>Drag and drop or click here <br> to upload image</p>
                                            <span>Upload images from desktop</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-kirim" value="Upload File">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>