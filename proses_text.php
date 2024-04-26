<!DOCTYPE html>
<html lang="en">

<head>
    <title>Proses & Notification</title>
    <style>
        body {
            background-color: #7bd3ea;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #8DECB4;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Data telah terkirim.</h3>
        <?php
        $name = $_POST['nama'];
        $usia = $_POST['usia'];
        $notel = $_POST['notel'];
        echo "Nama lengkap : $name <br>";
        echo "Usia : $usia <br>";
        echo "Nomer Handphone : $notel <br>";

        if (isset($_POST["submit"])) {
            $target_dir = "./scankk/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            if (move_uploaded_file(
                $_FILES["fileToUpload"]["tmp_name"],
                $target_file
            )) {
                echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil
        diunggah.";
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }
        ?>
    </div>
</body>

</html>