<?php 
//menggunakan variabel
$teks ="hallo mahasiswa proditi";
$hasilucwords = ucwords($teks);
echo "Hasil sebelum diberikan fungsi ucwords <br>";
echo "$teks";
echo "<hr>";
echo "Hasil setelah diberikan fungsi ucwords <br>";
echo "$hasilucwords";
echo "<hr>";
echo "<hr>";

//tidak menggunakan variabel
echo "Hasil sebelum diberikan fungsi ucwords <br>";
echo "halo anak bengkel";
echo "<hr>";
echo "Hasil setelah diberikan fungsi ucword <br>";
echo ucwords("halo anak bengkel");
?>