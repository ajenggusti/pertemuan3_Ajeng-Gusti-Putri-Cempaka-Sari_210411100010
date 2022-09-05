<?php 
        //variabel
        session_start();
        $_SESSION['npanjang'] = $_POST['namaPanjang'];
        $_SESSION['nPanggilan'] = $_POST['namaPanggilan'];
        $_SESSION['int_nim'] = (int)$_POST['nim'];
        $_SESSION['int_usia'] = (int)$_POST['usia'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['float_tall'] = (float)$_POST['tinggi'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hasil</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>

        <h1>IDENTITAS DIRI</h1>
        <table>
                <tr>
                        <td>Nama Panjang</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['npanjang'];?></td>
                </tr>
                <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['nPanggilan'];?></td>
                </tr>
                <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['int_nim'];?></td>
                </tr>
                <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['int_usia'];?></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['alamat'];?></td>
                </tr>
                <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td><?php echo $_SESSION['float_tall'];?></td>
                </tr>
                <tr>
                        <td><a href="session.php">SESSION</a></td>
                </tr>
        </table>
</body>
</html>