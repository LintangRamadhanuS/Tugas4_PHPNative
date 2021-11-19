<?php

if($_POST){

    $id_pelanggan=$_POST['id_pelanggan'];

    $id_petugas=$_POST['id_petugas'];

    $tgl_transaksi=$_POST['tgl_transaksi'];

    if(empty($tgl_transaksi)){

        echo "<script>alert('tanggal trnsaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into transaksi (id_pelanggan, id_petugas, tgl_transaksi) value ('".$id_pelanggan."','".$id_petugas."','".$tgl_transaksi."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan transaksi');location.href='tambah_transaksi.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";

        }

    }

}

?>