<?php

if($_POST){

    $id_member=$_POST['nama_member'];
    $tgl=$_POST['tgl'];
    $jenis=$_POST['jenis'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $nama_user=$_POST['nama_user'];
    $qty=$_POST['qty'];
    
    if(empty($tgl)){
        echo "<script>alert('Date cannot be empty');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($batas_waktu)){
        echo "<script>alert('Deadline cannot be empty');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($tgl_bayar)){
        echo "<script>alert('Payment date cannot be empty');location.href='tambah_transaksi.php';</script>";

    } else {
        include "koneksi.php";
        $sql = "insert into transaksi (id_transaksi, id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) 
        VALUES 
        (NULL, '".$id_member."','".$tgl."', '".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$nama_user."')";

        //echo $sql;
        $insert=mysqli_query($conn,$sql);
        $last_id = mysqli_insert_id($conn);
        $insert_detail = mysqli_query($conn, 'insert into detail_transaksi value (NULL, '.$last_id.', '.$jenis.', '.$qty.')');

        if($insert && $insert_detail){
            var_dump($insert);
            var_dump($insert_detail);
            echo "<script>alert('Success add transaction');location.href='tampil_transaksi.php';</script>";
            } else {
                var_dump($insert);
            var_dump($insert_detail);
            echo "<script>alert('Fail add transaction');location.href='tambah_transaksi.php';</script>";
            }
    }
}
    ?>