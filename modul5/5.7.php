<table border=1>
    <tr>
        <td> Nama </td>
        <td> Email </td>
        <td> Pesan </td>
        <td> opsi </td>
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
        <td>
            <a href=5.9.php?no_tamu=<?php echo 
            $data['no_tamu'];?>>Edit</a> | 
            <a href=5.8.php?no_tamu=<?php echo 
            $data['no_tamu'];?>>Hapus</a> 
        </td>
    </tr>
    <?php } ?>
</table>