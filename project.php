<?php

require 'function.php';
require 'includes/tanggalindo.php';

date_default_timezone_set("ASIA/JAKARTA");

$project =  query("SELECT * FROM project ORDER BY id ASC ");

// tombol cari diklik
if (isset($_POST["cari"])) {
    $project = cari($_POST["keyword"]);
}

?>

<?php include 'includes/header.php'; ?>

<section id="project">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="text-center mt-5 mb-4">Project Mentoring</h4>

                <a href="tambah.php" class="d-block"><button class="btn btn-success mb-3">Tambah project</button></a>

                <form action="" method="post">
                    <input type="text" name="keyword" autofocus placeholder="Cari project" autocomplete="off">
                    <button type="submit" name="cari" class="btn btn-primary">Cari</button>
                </form>

                <div class="tableproject">
                    <table class="justify-content-center">
                        <thead>
                            <tr>
                                <th>PROJECT NAME</th>
                                <th>CLIENT</th>
                                <th>PROJECT LEADER</th>
                                <th>START DATE</th>
                                <th>END DATE</th>
                                <th>PROGRESS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($project as $row) : ?>
                                <tr>
                                    <td><?= $row["pname"]; ?></td>
                                    <td><?= $row["client"]; ?></td>
                                    <td>
                                        <a href="#" style="text-decoration: none; color:black; font-weight:bolder;"><?= $row["pleader"]; ?></a> <br>
                                        <?= $row["email"]; ?>
                                    </td>
                                    <td><?= tgl_indo($row["sdate"]) ?></td>
                                    <td><?= tgl_indo($row["edate"]) ?></td>
                                    <td> <progress id="file" value="<?= $row["progress"]; ?>" max="100"></progress> <?= $row["progress"]; ?> %</td>
                                    <td>
                                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Tekan OK Jika Anda Ingin Menghapus Projcet Ini')"><button class="btn btn-danger btn-sm"><i class="fa-light fa-trash fa"></i></button></a>
                                        <!-- "onclick" dari JS untuk membuat alert pilihan YES or NO saat menekanan hapus -->
                                        <a href="edit.php?id=<?= $row["id"] ?>"><button class="btn btn-success btn-sm"><i class="fa-light fa-pen fa"></i></button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="created">
            <p class="c-by">Created by :</p>
            <h6 class="c-name">Muhammad Bilal</h6>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>