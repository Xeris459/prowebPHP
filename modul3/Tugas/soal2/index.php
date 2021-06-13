<html>
    <head>
        <title>kalkulator</title>
    </head>
    <body>
        <form action="" method="post">
            Masukan Angka Pertama : <input required type="number" name="pertama"><br>
            Masukan Angka kedua : <input required type="number" name="kedua"><br>
            Operator yang digunakan : 
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Hitung">
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    switch ($_POST['operator']) {
        case '+':
            $hasil = $_POST['pertama'] + $_POST['kedua'];
            break;
        case '-':
            $hasil = $_POST['pertama'] - $_POST['kedua'];
            break;
        case '/':
            $hasil = $_POST['pertama'] / $_POST['kedua'];
            break;
        case '*':
            $hasil = $_POST['pertama'] * $_POST['kedua'];
            break;
    }
    
    echo "<br>angka $_POST[pertama] $_POST[operator] $_POST[kedua] memiliki hasil $hasil";
}
?>