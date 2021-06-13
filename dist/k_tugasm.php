<?php 
    include '../koneksi.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM tmahasiswa WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location: ad_tugas.php');
    } else 
        echo "gagal delete";
?>