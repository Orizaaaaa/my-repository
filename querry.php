<?php //Query 

$nama_pemesan = $_POST['nama_pemesan'];  
$nomor_meja = $_POST['nomor_meja'];  
$jumlah_pesanan = $_POST['jumlah_pesanan'];  

 //INSERT 
 $query = " INSERT INTO kedai_kopi ( nama_pemesan, nomor_meja, jumlah_pesanan, jam )  VALUES ( '$nama_pemesan', '$nomor_meja', '$jumlah_pesanan', '$jam' ) "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //SELECT 
 $query = " SELECT nama_pemesan, nomor_meja, jumlah_pesanan, jam FROM kedai_kopi "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //UPDATE 
 $query = " UPDATE kedai_kopi SET  nama_pemesan = '$nama_pemesan',  nomor_meja = '$nomor_meja',  jumlah_pesanan = '$jumlah_pesanan' , jam = '$jam' WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //DELETE 
 $query = " DELETE FROM kedai_kopi WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>