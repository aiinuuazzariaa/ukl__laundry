<?php

if($_POST){

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['telp'];

    if(empty($nama)){
        echo "<script>alert('Member name cannot be empty');location.href='tambah_member.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('Address cannot be empty');location.href='tambah_member.php';</script>";

    } elseif(empty($telp)){
        echo "<script>alert('Telp cannot be empty');location.href='tambah_member.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, telp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$telp."')");
            if($insert){
            echo "<script>alert('Success add member');location.href='tampil_member.php';</script>";
            } else {
            echo "<script>alert('Fail add member');location.href='tambah_member.php';</script>";
            }
    }
}
    ?>