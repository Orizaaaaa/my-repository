<?php
    include 'koneksi.php';
    
    $nama_pemesan = $_POST['nama_pemesan'];  
    $nomor_meja = $_POST['nomor_meja'];  
    $jumlah_pesanan = $_POST['jumlah_pesanan'];  
    $jam = $_POST['jam'];
    
    
    $query = " INSERT INTO kedai_kopi ( nama_pemesan, nomor_meja, jumlah_pesanan, jam )  VALUES ( '$nama_pemesan', '$nomor_meja', '$jumlah_pesanan', '$jam' ) "; 
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Makanan anda akan segera di buat";
} else {
    echo "Query Failed";
}
?>