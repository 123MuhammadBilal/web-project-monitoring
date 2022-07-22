<?php
require 'function.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
            <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'project.php';
            </script> 
        ";
} else {
    echo "
            <script>
            alert('Data Gagal dihapus!');
            document.location.href = 'project.php';
            </script> 
        ";
}
