<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai kopi</title>
</head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>

    <div class="container">
        <h1> ANTRIAN KEDAI COFEE </h1>

        <div class="row">

            <form id="form1" name="form1" method="post" action="tambah.php">
                <label for="nama_pemesan">Nama Pemesan</label><input type="text" name="nama_pemesan" id="nama_pemesan"
                    required />
                <br class="clear" />
                <label for="nomor_meja">Nomor Meja</label><input type="number" name="nomor_meja" id="nomor_meja"
                    required />
                <br class="clear" />
                <label for="jumlah_pesanan">Masukan Pesanan</label><input type="text" name="jumlah_pesanan"
                    id="jumlah_pesanan" required />
                <br class="clear" />
                <input type="time" id="jam" name="jam">

                <input class="submit" type="submit" />
            </form>

        </div>
    </div>

    <!-- menu -->
    <section class="menu">

        <div class="card" style="width: 17rem;">
            <img src="img/1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cappuccino</h5>
                <p class="card-text"><b>15k</b> </p>
            </div>
        </div>

        <div class="card" style="width: 17rem;">
            <img src="img/3.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mocha</h5>
                <p class="card-text"><b>15k</b> </p>
            </div>
        </div>

        <div class="card" style="width: 17rem;">
            <img src="img/2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Latte</h5>
                <p class="card-text"><b>15k</b> </p>
            </div>
        </div>

        <div class="card" style="width: 17rem;">
            <img src="img/4.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cold Java</h5>
                <p class="card-text"><b>15k</b> </p>
            </div>
        </div>

    </section>
</body>

</html>