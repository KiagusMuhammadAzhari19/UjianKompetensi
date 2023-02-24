<?php
include '../koneksi.php';
?>
<?php
$id = $_GET['id'];
$status = $_GET['status_ajuan'];
$data = "SELECT * FROM mahasiswa WHERE id = $id LIMIT 1";
$result = mysqli_query($db, $data);
$row = mysqli_fetch_array($result);

if (isset($_GET['id']) && isset($_GET['status_ajuan'])) {  
    $id=$_GET['id'];  
    $status=$_GET['status_ajuan']; 
if ($status=='Belum Verifikasi'){
mysqli_query($db,"update mahasiswa set status_ajuan='Sudah Verifikasi' where id='$id'"); 
}elseif ($status=='Sudah Verifikasi'){
mysqli_query($db,"update mahasiswa set status_ajuan='Sudah Verifikasi' where id='$id'");  

    echo "<script> alert ('Data Berhasil Diverifikasi')</script>";
    
    header("refresh:0;tampil.php");
    die();  
}

?>