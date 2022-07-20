<?php
//untuk menghubngkan ke database phpdasar
$conn = mysqli_connect("localhost", "root", "", "interview3");

function query($query)
{
    global $conn; // mengambil variabel $conn diluar function query
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    //ambil data tiap elemen dalam form
    // htmlspecialchars berfungsi agar usertidak bisa menginput kode dalam inpurtan form karena berbahaya
    $pname = htmlspecialchars($data["pname"]);
    $client = htmlspecialchars($data["client"]);
    $pleader = htmlspecialchars($data["pleader"]);
    $email = htmlspecialchars($data["email"]);
    $sdate = htmlspecialchars($data["sdate"]);
    $edate = htmlspecialchars($data["edate"]);
    $progress = htmlspecialchars($data["progress"]);

    // query insert data
    $query = "INSERT INTO project VALUES ('', '$pname','$client','$pleader','$email','$sdate','$edate','$progress')";
    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM project WHERE id= $id");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data["id"];

    $pname = htmlspecialchars($data["pname"]);
    $client = htmlspecialchars($data["client"]);
    $pleader = htmlspecialchars($data["pleader"]);
    $email = htmlspecialchars($data["email"]);
    $sdate = htmlspecialchars($data["sdate"]);
    $edate = htmlspecialchars($data["edate"]);
    $progress = htmlspecialchars($data["progress"]);

    // query insert data
    $query = "UPDATE project SET 
    pname = '$pname',
    client = '$client',
    pleader = '$pleader',
    email = '$email',
    sdate = '$sdate', 
    edate = '$edate', 
    progress = '$progress' 
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    //kembalikan return angka ketika ada data yang berhasil diupdate
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM project
    WHERE
    pname LIKE '%$keyword%' OR
    client LIKE '%$keyword%' OR
    pleader LIKE '%$keyword%' OR
    sdate LIKE '%$keyword%' OR
    edate LIKE '%$keyword%' OR
    progress LIKE '%$keyword%'
    ";
    return query($query);
}
