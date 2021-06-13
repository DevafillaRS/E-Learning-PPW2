<?php 
    include '../koneksi.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM umahasiswa WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location: ad_ujian.php');
    } else 
        echo "gagal delete";
?>