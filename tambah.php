<?php

require 'function.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek data berhasil di tambahkan atau gagal
    if (tambah($_POST) > 0) {
        //menampilkan alert menggunakan javascript
        echo "
            <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'project.php';
            </script> 
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'project.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css?<?= time() ?>" />

    <title>Document</title>
</head>

<body>
    <section id="edit-tambah">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form action="tambah.php" method="post">
                        <h1 class="mt-3 text-center mb-5">Tambah Data Mahasiswa</h1>

                        <label for="pname">Project Name </label>
                        <input type="text" class="form-control" name="pname" id="pname" required>

                        <label for="client">Client </label>
                        <input type="text" class="form-control" name="client" id="client" required>

                        <label for="pleader">Project Leader </label>
                        <input type="text" class="form-control" name="pleader" id="pleader" required>

                        <label for="email">Email </label>
                        <input type="text" class="form-control" name="email" id="email" required>

                        <label for="sdate">Start Date </label>
                        <input type="date" class="form-control" name="sdate" id="sdate" required>

                        <label for="edate">End Date </label>
                        <input type="date" class="form-control" name="edate" id="edate" required>

                        <label for="progress">Progress </label>
                        <input type="range" min="0" max="100" value="0" class="form-control" name="progress" id="progress" required>

                        <button type="submit" name="submit" class="btn btn-success mt-3 w-100">Tambah Data</button>
                    </form>
                    <a href="project.php"><button class=" btn btn-danger mt-3 float-end">Kembali</button></a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>