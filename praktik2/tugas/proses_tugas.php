<?php
    $nama = $_GET['nama'];
    $jumlah = $_GET['jumlah'];
    $produk = $_GET['produk'];
    if($produk == "TV"){
        $ket = 4200000 * $jumlah;
    }
    elseif ($produk == "Kulkas") {
        $ket = 3100000 * $jumlah;
    }else {
        $ket =  3800000 * $jumlah;
    }
?>