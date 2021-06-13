<?php
if(isset($_POST['submit'])){
    echo "Anak Ayam $_POST[nama] ada $_POST[jum] Ekor";

    for ($i= (int) $_POST['jum']; $i > 1; $i--) { 
        echo "<br>  Anak Ayam Turun $i mati satu tinggal " . ($i - 1);
    }
    
    echo "<br> Anak Ayam Turun $i mati satu tinggal Induknya";
}
?>