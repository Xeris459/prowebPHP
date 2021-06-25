<html>
    <head>
        <title> select query </title>
    </head>
    <body>
        <table border=1>
            <tr>
                <td> Nama </td>
                <td> Email </td>
                <td> Pesan </td>
            </tr>
            <?php
            include '5.1.php';
            $query=mysqli_query($konek,"select * from tamu");
            while($data=mysqli_fetch_array($query))
            { ?>
            <tr>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['email']; ?> </td>
                <td> <?php echo $data['pesan']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>