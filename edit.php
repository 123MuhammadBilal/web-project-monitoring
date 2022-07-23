<?php

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id nya
$dktr = query("SELECT * FROM project WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek data berhasil di edit atau gagal
    if (edit($_POST) > 0) {
        //menampilkan alert menggunakan javascript
        echo "
            <script>
            alert('Data berhasil diedit!');
            document.location.href = 'project.php';
            </script> 
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal diedit!');
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
                    <h1 class="mt-3 text-center mb-5">Edit Projcet Mentoring</h1>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $dktr["id"]; ?>">

                        <label for="pname">Project Name </label>
                        <input type="text" class="form-control" name="pname" id="pname" value="<?= $dktr["pname"]; ?>" required>

                        <label for="client">Client </label>
                        <input type="text" class="form-control" name="client" id="client" value="<?= $dktr["client"]; ?>" required>

                        <label for="pleader">Project Leader </label>
                        <input type="text" class="form-control" name="pleader" id="pleader" value="<?= $dktr["pleader"]; ?>" required>

                        <label for="email">Email </label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $dktr["email"]; ?>" required>

                        <label for="sdate">Start Date </label>
                        <input type="date" class="form-control" name="sdate" id="sdate" value="<?= $dktr["sdate"]; ?>" required>

                        <label for="edate">End Date </label>
                        <input type="date" class="form-control" name="edate" id="edate" value="<?= $dktr["edate"]; ?>" required>

                        <label for="progress">Progress </label>
                        <input type="range" class="form-control" name="progress" id="progress" value="<?= $dktr["progress"]; ?>" required>

                        <button type="submit" name="submit" class="btn btn-success mt-3 w-100">Edit Data</button>
                    </form>
                    <a href="project.php"><button class="btn btn-danger mt-3 float-end ">Kembali</button></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>