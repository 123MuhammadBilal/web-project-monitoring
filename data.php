<?php

require 'function.php';

$project =  query("SELECT * FROM project ORDER BY id ASC ");

// tombol cari diklik
if (isset($_POST["cari"])) {
    $project = cari($_POST["keyword"]);
}

?>

<?php include 'includes/header.php'; ?>

<section id="data">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="text-center mt-5 mb-4">Project Mentoring</h4>
                <a href="data.php"><button class="btn btn-danger float-end">Kembali</button></a>

                <a href="tambah.php" class="d-block"><button class="btn btn-success mb-3">Tambah Data</button></a>

                <form action="" method="post">
                    <input type="text" name="keyword" autofocus placeholder="Cari project" autocomplete="off">
                    <button type="submit" name="cari" class="btn btn-primary">Cari</button>
                </form>

                <div class="tabledata">
                    <table class="justify-content-center mt-2">
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
                                        <a href="#" style="text-decoration: none; color:black; font-weight:bold;"><?= $row["pleader"]; ?></a> <br>
                                        <?= $row["email"]; ?>
                                    </td>
                                    <td><?= $row["sdate"]; ?></td>
                                    <td><?= $row["edate"]; ?></td>
                                    <td> <progress id="file" value="<?= $row["progress"]; ?>" max="100"></progress> <?= $row["progress"]; ?> %</td>
                                    <td>
                                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')"><button class="btn-danger"><i class="fa-light fa-trash fa"></i></button></a>
                                        <!-- "onclick" dari JS untuk membuat alert pilihan YES or NO saat menekanan hapus -->
                                        <a href="edit.php?id=<?= $row["id"] ?>"><button class="btn-success"><i class="fa-light fa-pen fa"></i></button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>