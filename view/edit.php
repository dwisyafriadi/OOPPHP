<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="http://localhost/mvc2/mvc/index.php?controller=controller&fungsi=submit&userid=<?=$_GET['userid']?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$row['nama']?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?=$row['nim']?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" name="umur" value="<?=$row['umur']?>"></td>
            </tr>
            <tr>
                <td>foto</td>
                <td>:</td>
                <td><input type="file" name="foto" value="foto" id="foto">
                <label for="foto">select a file to uploads </label>
                </td>
            </tr>

            <tr>
                <input type="submit" name="kirim">
            </tr>
        </table>
    </form>
    </body>
</html>
