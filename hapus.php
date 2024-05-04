<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div id="navbarBasicExample" class="navbar-menu">
                <a class="navbar-item ml-5" href="index.php"> Tabel Data </a>

                <a class="navbar-item" href="input.php"> Input Data </a>

                <a class="navbar-item" href="update.php"> Update Data </a>

                <a class="navbar-item" href="hapus.php"> Hapus Data </a>
            </div>
        </nav>
    </header>
    <section class="section">
        <div class="container">
            <h1 class="title">Hapus Data Anggota</h1>
            <form id="updateForm" action="deletee.php" method="GET">

                <div class="field">
                    <label class="label">Masukkan Nomor Anggota yang Ingin Dihapus:</label>
                    <div class="control">
                        <input class="input" type="number" id="idInput" name="id" placeholder="Masukkan ID Anggota">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-danger" type="submit">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>