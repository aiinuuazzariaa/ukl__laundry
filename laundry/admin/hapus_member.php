<?php
if($_GET['id_member']){
include 'koneksi.php';
$qry_hapus=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");

if($qry_hapus){
echo "<script>alert('Success delete member'); location.href='tampil_member.php'; </script>";

} else {
    echo "<script>alert('Fail delete member'); location.href='tampil_member.php'; </script>";
}
}
?>;