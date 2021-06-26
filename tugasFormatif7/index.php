<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator sederhana</title>
</head>

<body>
    <form action="kalkulator.php" method="post">
        <input required type="number" name="bil1"><br>
        <input required type="number" name="bil2"><br>
        <select required name="operator">
            <option value="" disabled selected>-- pilih salah satu --</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>