<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="panel">
        <h1>Form Tambah Mahasiswa</h1>
        <form method="post" action="simpan.php">
            <label>
                Nim
                <input type="text" name="nim">
            </label>

            <label>
                Nama 
                <input type="text" name="nama" autocomplete="off">
            </label>

            <label>
                Jenis Kelamin
                <input type="radio" name="jenkel" value="Laki-laki">Laki-laki
                <input type="radio" name="jenkel" value="Perempuan">Perempuan
            </label>

            <label>
                Tanggal lahir
                <input type="date" name="tgllahir">
            </label>

            <label>
                No.Telepon
                <input type="tel" name="telp" autocomplete="off">
            </label>
            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>