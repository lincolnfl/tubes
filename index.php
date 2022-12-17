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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-dark navbar-expand-lg shadow-sm fixed-top" style="background-color: #850E35;">
    <div class="container-fluid d-flex flex-row mx-3">
      <a class="navbar-brand" href="#"><img src="img/main.png" alt="brand" width="45px" height="52px">Kantin Rawr</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#about">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#menu">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#admin">Keranjang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <!--End of Navbar-->
      <!--Top-->
      <div class="container m-0 p-0">
        <div class="top_page text-center justify-content-center">
          <div class="top_text" data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
            <p>BEST KANTIN IN USU</p>
            <h2>Tubes Inspired Kantin</h2>
            <i class="bi bi-arrow-down"></i>
            <h5>Learn more</h5>
          </div>
        </div>
        </div>
      </div>
      <!--End of Top-->
      <!--Story-->
      <div class="container-fluid m-0 p-0">
        <div class="story">
          <div class="row">
            <div class="photo col-12 col-lg-6">
              <img src="img/test.png" alt="" height="500px">
            </div>
            <div class="desc col col-12 col-lg-6 px-4 pt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
              <h2>Our Story</h2><br>
              <p class="pb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate culpa aliquid quidem placeat eveniet accusantium officia ipsam, labore alias esse reiciendis in velit reprehenderit. <br>
              <br> Error, eius. Adipisci hic dolorum libero unde ad eligendi. Distinctio modi similique blanditiis suscipit aliquam accusantium, quasi, impedit voluptatibus, non molestias delectus id nulla dolor cupiditate.
              </p>
              <div class="row">
                <div class="col col-4 px-5">
                  <h2 >10+</h2>
                  <p>Users</p>
                </div>
                <div class="col col-4 px-5">
                  <h2>20+</h2>
                  <p>Orders Made</p>
                </div>
                <div class="col col-4 px-5">
                  <h2>2</h2>
                  <p>Jurusan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Story -->
        <!-- Best Menu -->
      <div class="container-fluid m-0 p-0">
        <div class="best" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
          <h2 class="text-center justify-content-center pt-5">Top Promos and Menus</h2>
          <div class="row products mt-4 mb-4 justify-content-center">
            <div class="card mb-5 mx-3 px-0" style="width: 18rem;" data-name="nasgor">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-2 px-0">
                <p class="card-text"><span class="nama-makanan">Nasi Goreng Ala Rawr</span><br>
                <span class="desc-makanan">Nasi Goreng Specialty Rawr dengan telur dan juga seafood</span>
                <br><span class="harga-diskon">Diskon Rp 5.000</span>
                <span class="harga-awal">25.000</span><br>
                <span class="harga-stlh"><b>Rp20.000</b></span><br>
                <a href="#" class="btn btn-dark direct_menu "><i class="bi bi-arrow-bar-right"></i>&nbsp;&nbsp;To Menu</a>
                </p>
              </div>
            </div>
            <div class="card mb-5 mx-3 px-0" style="width: 18rem;" data-name="miegor">
              <img src="img/test2.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-0 px-0">
                <p class="card-text"><span class="nama-makanan">Mie Goreng Ala Rawr</span><br>
                <span class="desc-makanan">Mie Goreng Specialty Rawr dengan telur dan juga seafood</span>
                <br><span class="harga-diskon">Diskon Rp 2.000</span>
                <span class="harga-awal">20.000</span><br>
                <span class="harga-stlh"><b>Rp18.000</b></span><br>
                <a href="#" class="btn btn-dark direct_menu "><i class="bi bi-arrow-bar-right"></i>&nbsp;&nbsp;To Menu</a>
                </p>
              </div>
            </div>
            <div class="card mb-5 mx-3 px-0" style="width: 18rem;" data-name="bakar">
              <img src="img/test2.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-0 px-0">
                <p class="card-text"><span class="nama-makanan">Nasi Bakar Ala Rawr</span><br>
                <span class="desc-makanan">Nasi Bakar Specialty Rawr dengan bumbu racikan Nusantara</span>
                <br><span class="harga-diskon">Diskon Rp 3.000</span>
                <span class="harga-awal">25.000</span><br>
                <span class="harga-stlh"><b>Rp22.000</b></span><br>
                <a href="#" class="btn btn-dark direct_menu "><i class="bi bi-arrow-bar-right"></i>&nbsp;&nbsp;To Menu</a>
                </p>
              </div>
            </div>
        </div>
      </div>
      </div>
      <!--End of Best Menu-->
      <!-- Pickup Location -->
      <div class="container">
          <div class="row">
            <div class="col col-lg-7 pt-4 px-4 mb-5" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
              <img src="img/test.png" alt="PromoHariIni" width="500px" height="300px">
            </div>
            <div class="col col-lg-5 pt-5 mt-5 " data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
              <h2 class="heading">
                Pickup Location
              </h2>
              <p class="isi-heading">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Gedung C dan D Fasilkom-TI, Universitas Sumatera Utara, Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20155</span>
                <br><br><span><b>Food must be picked up before 12 PM</b></span>
              </p>
            </div>
          </div>
        </div>
      <!-- End of Pickup Location-->
      <!-- Founders -->
      <div class="container-fluid m-0 p-0">
        <div class="founders" data-aos="slide-up" data-aos-duration="1000" data-aos-once="true">
          <h2 class="text-center justify-content-center pt-5 pb-5">Founders</h2>
          <div class="row products mt-4 mb-4 justify-content-center">
            <div class="card mb-5 mx-2 px-0" style="width: 13rem;">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-2 px-0">
                <p class="card-text"><span class="nama-makanan">Lincoln Frankle Lim</span><br>
                <span class="position">Position : CEO Kantin Rawr</span>
                </p>
              </div>
            </div>
            <div class="card mb-5 mx-2 mt-5 px-0" style="width: 13rem;">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-2 px-0">
                <p class="card-text"><span class="nama-makanan">Lincoln Frankle Lim</span><br>
                <span class="position">Position : CEO Kantin Rawr</span>
                </p>
              </div>
            </div>
            <div class="card mb-5 mx-2 px-0" style="width: 13rem;">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-2 px-0">
                <p class="card-text"><span class="nama-makanan">Lincoln Frankle Lim</span><br>
                <span class="position">Position : CEO Kantin Rawr</span>
                </p>
              </div>
            </div>
            <div class="card mb-5 mx-2 mt-5 px-0" style="width: 13rem;">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-2 px-0">
                <p class="card-text"><span class="nama-makanan">Lincoln Frankle Lim</span><br>
                <span class="position">Position : CEO Kantin Rawr</span>
                </p>
              </div>
            </div>
            <div class="card mb-5 mx-2 px-0" style="width: 13rem;">
              <img src="img/test.png" class="card-img-top card-img-bottom" alt="...">
              <div class="card-body mx-2 px-0">
                <p class="card-text"><span class="nama-makanan">Lincoln Frankle Lim</span><br>
                <span class="position">Position : CEO Kantin Rawr</span>
                </p>
              </div>
            </div>
        </div>
        </div>
      </div>
    <!-- End of Founders -->
    <!--Final Section -->
    <div class="container-fluid final_section m-0 p-0">
      <div class="row  mt-4 px-5 pt-5 pb-5">
        <div class="col col-3">
          <h4>More About Us</h4>
          <p class="pb-3">Check Out our following Social Media</p>
          <img src="img/insta.png" alt="insta" width="30px" height="30px">
          <span>kantinrawr.id</span><br><br>
          <img src="img/line.png" alt="insta" width="30px" height="30px">
          <span>kantinrawr.id</span>
        </div>
        <div class="col col-6 justify-content-center text-center">
          <h4>Tunggu Apa Lagi, Ayo Pesan Sekarang</h4>
          <div class="arrow-down">
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i>
            <i class="bi bi-arrow-down"></i><br><br>
            <a href="#" class="btn btn-light">Order Sekarang</a>
          </div>
        </div>
        <div class="col col-3">
          <h4>Contact Person</h4>
          <i class="bi bi-telephone"></i>
          <span>Farel - 029309183920</span><br>
          <i class="bi bi-telephone"></i>
          <span>Gebi - 0291231420</span>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>