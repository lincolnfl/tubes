<?php
    require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    <title>Kantin Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="menu.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500;1,700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    </style>
</head>
<body>
  <div class="cart">
    <div class="cart-title text-center fw-bold mt-4 fs-3 mb-3" style="color: #850E35;">Your Cart</div>
      <form action="pesanan.php" method="post">
        <div class="cart-content ps-4">

        </div>
      </form>
          <div class="total mx-3">
            <div class="total-title">Total</div>
            <div class="total-price">Rp 0</div>
          </div>
          <div class="text-center mt-3"><a href="#" class="btn buy-now">Buy Now</a></div>
          <i class="cancel bi bi-x"></i>
        </div>
  </div>
  <!--Navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg shadow-sm fixed-top" style="background-color: #850E35;">
        <div class=" container-fluid d-flex flex-row">
          <a class="navbar-brand" href="#"><img src="img/main.png" alt="brand" width="45px" height="52px">Kantin Rawr</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#menu">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#cart-click" id="cart-click">Keranjang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--End of Navbar-->
      <div class="container2">
        <div class="row">
        <div class=" col col-3">
          <!--Sidebar-->
          <section class="sidebar d-none d-lg-block">
          <div class="header">
            <div class="list-item">
                <a href="#">
                <p class="desc-main">Welcome, Lincoln</p>
                </a>
              </a>
            </div>
            <div class="illus d-none d-lg-block">
              <img src="img/sidebar-item.jpeg" alt="header" width="185px" height="140px">
            </div>
          </div>
          <div class="main">
              <a href="#promo" class="items">
                <i class="bi bi-mortarboard-fill icon"></i>
                <span>Promo Hari Ini</span>
              </a>
              <a href="#fav" class="items">
                <i class="bi bi-mortarboard-fill icon"></i>
                <span>Menu Favorit</span>
              </a>
              <a href="#nasi" class="items">
                <i class="bi bi-mortarboard-fill icon"></i>
                <span>Nasi</span>
              </a>
              <a href="#spaghetti" class="items">
                <i class="bi bi-mortarboard-fill icon"></i>
                <span>Spaghetti</span>
              </a>
              <a href="#pizza" class="items">
                <i class="bi bi-mortarboard-fill icon"></i>
                <span>Pizza</span>
              </a>
          </div>
        </div>
      </section>
      <!--End of Sidebar-->
      <!--Main content-->
        <div class=" col col-12 col-lg-9 main-content pt-3 px-0">
          <div id="promo" class="title">
            <h2>Promo Hari Ini</h2>
            <hr>
          </div>
          <div class="row products mt-4 mb-4 justify-content-start">
            <?php 
            foreach (query("SELECT judul,diskon,akhir,desk,code FROM menu WHERE id <= 2") as $promo) : 
            $awal = $promo['akhir'] + $promo['diskon'];?>
            <div class="card mb-3 mx-2 px-0" style="width: 18rem;" data-name="<?= $promo ['code']; ?>">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-0 px-0">
                <p class="card-text"><span class="nama-makanan"><?= $promo['judul']; ?></span><br>
                <span class="desc-makanan"><?= $promo['desk']; ?></span>
                <br><span class="harga-diskon">Diskon Rp <?= $promo['diskon']; ?></span>
                <span class="harga-awal"><?= $awal; ?></span><br>
                <span class="harga-stlh"><b>Rp <?= $promo['akhir']; ?></b></span>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
            <div id="fav" class="title">
              <h2>Menu Favorit</h2>
              <hr>
            </div>
            <div class="row products mt-4 mb-4 justify-content-start">
            <?php 
            foreach (query("SELECT judul,diskon,akhir,desk,code FROM menu WHERE id = 3 OR code ='bolognese' ") as $fav) : 
            $awal = $fav['akhir'] + $fav['diskon'];?>
            <div class="card mb-3 mx-2 px-0" style="width: 18rem;" data-name="<?= $fav['code']; ?>">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-0 px-0">
                <p class="card-text"><span class="nama-makanan"><?= $fav['judul']; ?></span><br>
                <span class="desc-makanan"><?= $fav['desk']; ?></span>
                <br><span class="harga-diskon">Diskon Rp <?= $fav['diskon']; ?></span>
                <span class="harga-awal"><?= $awal; ?></span><br>
                <span class="harga-stlh"><b>Rp <?= $fav['akhir']; ?></b></span>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
              <div id="nasi" class="title">
                <h2>Nasi</h2>
                <hr>
              </div>
              <div class="row products mt-4 mb-4 justify-content-start">
              <?php 
              foreach (query("SELECT judul,diskon,akhir,desk,code,tipe FROM menu WHERE tipe='nasi'") as $nasi) : 
              $awal = $nasi['akhir'] + $nasi['diskon'];?>
              <div class="card mb-3 mx-2 px-0" style="width: 18rem;" data-name="<?= $nasi['code']; ?>">
                <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
                <div class="card-body mx-0 px-0">
                  <p class="card-text"><span class="nama-makanan"><?= $nasi['judul']; ?></span><br>
                  <span class="desc-makanan"><?= $nasi['desk']; ?></span>
                  <br><span class="harga-diskon">Diskon Rp <?= $nasi['diskon']; ?></span>
                  <span class="harga-awal"><?= $awal; ?></span><br>
                  <span class="harga-stlh"><b>Rp <?= $nasi['akhir']; ?></b></span>
                  </p>
                </div>
              </div>
              <?php endforeach; ?>
              </div>
                <div id="spaghetti" class="title">
                  <h2>Spaghetti</h2>
                  <hr>
                </div>
                <div class="row products mt-4 mb-4 justify-content-start">
              <?php 
              foreach (query("SELECT judul,diskon,akhir,desk,code,tipe FROM menu WHERE tipe='spaghetti'") as $spaghetti) : 
              $awal = $spaghetti['akhir'] + $spaghetti['diskon'];?>
              <div class="card mb-3 mx-2 px-0" style="width: 18rem;" data-name="<?= $spaghetti['code']; ?>">
                <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
                <div class="card-body mx-0 px-0">
                  <p class="card-text"><span class="nama-makanan"><?= $spaghetti['judul']; ?></span><br>
                  <span class="desc-makanan"><?= $spaghetti['desk']; ?></span>
                  <br><span class="harga-diskon">Diskon Rp <?= $spaghetti['diskon']; ?></span>
                  <span class="harga-awal"><?= $awal; ?></span><br>
                  <span class="harga-stlh"><b>Rp <?= $spaghetti['akhir']; ?></b></span>
                  </p>
                </div>
              </div>
              <?php endforeach; ?>
              </div>
                  <div class=" col col-12 col-lg-9 main-content pt-3 px-2">
                    <div id="pizza" class="title">
                      <h2>Pizza</h2>
                      <hr>
                    </div>
                    <div class="coming_soon">
                      <h3>Coming Soon</h3>
                    </div>
                  </div>
      <!--End of Main Content-->
      <!-- Preview  -->
      <div class="products-preview">
        <?php
          foreach (query("SELECT judul,desk,akhir,code,tipe,rate FROM menu WHERE id<=3") as $menu1) :
        ?>
        <div class="preview-desc">
        <div class="preview active" data-target="<?= $menu1['code'] ?>">
          <i class="bi bi-x"></i>
          <img class="product-image" src="img/test.png" alt="" width="190px" height="140px">
          <h3 class="product-title"><?= $menu1['judul'] ?></h3>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
            <span>( <?= $menu1['rate'] ?> )</span>
            <p><?= $menu1['desk'] ?></p>
            <h3 class="preview-harga">Rp <?= $menu1['akhir'] ?></h3><br>
              <a href="#" class="btn add-to-cart mx-3 px-4">Add to Cart</a>
          </div>
        </div>
        <?php endforeach; ?>
        <?php
          foreach (query("SELECT judul,desk,akhir,code,tipe,rate FROM menu WHERE id>3") as $menu2) :
        ?>
        <div class="preview active" data-target="<?= $menu2['code'] ?>">
          <div class="preview-desc">
          <i class="bi bi-x"></i>
          <img class="product-image" src="img/test2.png" alt="" width="190px" height="140px">
          <h3 class="product-title"><?= $menu2['judul'] ?></h3>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
            <span>( <?= $menu2['rate'] ?> )</span>
            <p><?= $menu2['desk'] ?></p>
            <h3 class="preview-harga">Rp <?= $menu2['akhir'] ?></h3><br>
              <a href="#" class="btn add-to-cart mx-3 px-4">Add to Cart</a>
          </div>
        </div>
        <?php endforeach; ?>
      <!-- End Of Preview -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="menu.js"></script>
</body>
</html>