<html>
    <head>
        <title>Hitung luas segitiga atau volume kubus</title>
    </head>
    <body>
        <form action="" method="post">
            Nilai Tinggi / Sisi : <input required type="number" name="pertama"><br>
            Nilai Alas / Sisi : <input required type="number" name="kedua"><br>
            rumus yang digunakan : 
            <select name="rumus" required>
                <option value="Luas Segitiga">Luas Segitiga</option>
                <option value="Volume Kubus">Volume Kubus</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Hitung">
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    if ($_POST['rumus'] == "Luas Segitiga") {
        $hasil = ($_POST['pertama'] * $_POST['kedua']) / 2;
    } else {
        $hasil = $_POST['pertama'] * 3;
    }
    
    echo "<br>hasil dari $_POST[rumus] adalah $hasil";
}
?>