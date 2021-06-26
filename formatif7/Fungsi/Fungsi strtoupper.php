<?php
//menggunakan variabel
$teks = "rio jumardi";
$hasilstrtoupper = strtoupper($teks);
echo "Hasil sebelum diberikan fungsi strtoupper <br>";
echo "$teks";
echo "<hr>";
echo "Hasil setelah diberkan fungsi strtoupper <br>";
echo "$hasilstrtoupper";
echo "<hr>";
echo "<hr>";

//tidak menggunakan variabel
echo "Hasil sebelum diberikan fungsi strtoupper <br>";
echo "anak bengkel";
echo "<hr>";
echo "Hasil setelah diberikan fungsi strtoupper <br>";
echo strtoupper("anak bengkel");