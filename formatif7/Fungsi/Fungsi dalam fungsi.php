<?php
function fungsiA(){
    echo "Ini adalah isi dari fungsi A";
}
function fungsiB(){
    echo "Ini adalah isi dari fungsi B";
    echo "Memanggil Fungsi A dari dalam fungsi B<br>";
    fungsiA();
}
function fungsiC(){
    echo "Ini adalah isi dari fungsi C";
    echo "Memanggil Fungsi B dari dalam fungsi C<br>";
    fungsiB();
}
echo "Panggil Fungsi A ";
fungsiA();
echo "<hr>";


echo "Panggil Fungsi B ";
fungsiB();
echo "<hr>";


echo "Panggil Fungsi C ";
fungsiC();
?>