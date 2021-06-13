<?php 
    include 'koneksi.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM tugas WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location: re_tugas.php');
    } else 
        echo "gagal delete";
?>