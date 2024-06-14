<?php
<<<<<<< HEAD
include 'koneksi.php';
include 'function.php';

$id = $_GET['id'];
if(hapus_data($id) > 0){
    echo "<script>alert('Data berhasil Dihapus');window.location.assign('index.php');</script>";
}else{
    echo "<script>alert('Data gagal Dihapus');window.location.assign('index.php');</script>";
=======
include_once("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id") or die(mysqli_error($koneksi));

if($query){
    echo "<script>
    alert('Data berhasil dihapus');
    window.location.assign(form3.php);
    </script>";
}else{
    echo "<script>
    alert('Data gagal dihapus');
    window.location.assign(form3.php);
    </script>";
>>>>>>> 775f00c7e4e89d26a9e19e31c3d98812886c8d46
}
?>
