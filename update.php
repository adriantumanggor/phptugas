
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Update Data Anggota</h1>
            <form action="update-form.php" method="GET">
                <div class="field">
                    <label class="label">Masukkan Nomor Anggota yang Ingin Diupdate:</label>
                    <div class="control">
                        <input class="input" type="number" name="id" placeholder="Masukkan ID Anggota">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Cari Data</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
