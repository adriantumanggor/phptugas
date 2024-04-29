<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contoh Website dengan Bulma CSS</title>
    <!-- Menggunakan Bulma CSS -->
    <link rel="stylesheet" href="style.css" />
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
              << CRUD>>
            </h1>
            <h2 class="subtitle judull">*Crypto*Rungkad*Udu*Dijual*</h2>
          </div>
        </div>
      </section>
    </header>
    <section id="input" class="section">
      <div class="container">
        <h2 class="title">Input Data Baru</h2>

        <form action="createe.php" method="POST">

        <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Nama</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="text" name="nama" placeholder="Masukkan nama" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Email</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="email" name="email" placeholder="Masukkan email" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">NRP</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="text" name="nrp" placeholder="Masukkan NRP" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Jenis Kelamin</label>
            </div>
            <div class="field-body">
              <div class="field">
                <div class="control">
                  <label class="radio">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki">
                    Laki-laki
                  </label>
                  <label class="radio">
                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Jurusan</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="text" name="jurusan" placeholder="Masukkan jurusan" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Alamat</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <textarea class="textarea" name="alamat" placeholder="Masukkan alamat"></textarea>
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">No HP</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="tel" name="no_hp" placeholder="Masukkan nomor HP" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Asal SMA</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="text" name="asal_sma" placeholder="Masukkan asal SMA" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Mata Kuliah Favorit</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <input class="input" type="text" name="mata_kuliah_favorit" placeholder="Masukkan mata kuliah favorit" />
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Ke-Hokian</label>
            </div>
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded">
                  <textarea class="textarea" name="hoki" placeholder="Masukkan Cerita Kehokian"></textarea>
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-label"></div>
            <div class="field-body">
              <div class="field">
                <p class="control">
                  <button class="button is-primary">Simpan</button>
                </p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    
    <script src="script.js"></script>
  </body>
</html>