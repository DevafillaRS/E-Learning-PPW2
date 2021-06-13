<?php 
    include 'koneksi.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM ujian WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location: re_ujian.php');
    } else 
        echo "gagal delete";
?>