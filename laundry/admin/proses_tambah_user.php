<?php

if($_POST){

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    if(empty($nama)){
        echo "<script>alert('Member name cannot be empty');location.href='tambah_user.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Username cannot be empty');location.href='tambah_user.php';</script>";

    } elseif(empty($password)){
        echo "<script>alert('Password cannot be empty');location.href='tambah_user.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password, role) value ('".$nama."','".$username."','".md5($password)."','".$role."')");
            if($insert){
            echo "<script>alert('Success add user');location.href='tampil_user.php';</script>";
            } else {
            echo "<script>alert('Fail add user');location.href='tambah_user.php';</script>";
            }
    }
}
    ?>