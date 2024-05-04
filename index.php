  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Nama</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="/Buycat.ttf" />

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

      <section id="header" class="hero">
        <div class="hero-body">
          <div class="container">
            <h1 class="title judull">
              Daftar Mahasiswa Ter-Hoki
            </h1>
            <h2 class="subtitle judulll">
            </h2>
          </div>
        </div>
      </section>
    </header>


    <!-- Tabel -->
    <section id="tabel" class="section">
      <div class="container">
        <h2 class="title">Table</h2>

        <table class="tabel table is-bordered is-fullwidth ce">
          <thead>
            <tr>
              <th colspan="6">
                <h2 class="has-text-centered" style="font-weight: bold">
                  Daftar Mahasiswa
                </h2>
              </th>
            </tr>
            <tr>
              <th class="has-text-centered">No</th>
              <th class="has-text-centered">NRP</th>
              <th class="has-text-centered">Nama</th>
              <th class="has-text-centered">Email</th>
              <th class="has-text-centered">Jenis Kelamin</th>
              <th class="has-text-centered">Ke-Hokian</th>
            </tr>
          </thead>
          <tbody>
            <?php include 'readd.php'; ?>
          </tbody>
        </table>
      </div>
    </section>
    <script src="script.js"></script>

  </body>

  </html>