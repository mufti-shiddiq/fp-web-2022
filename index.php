<?php
$thisPage = "index";
?>

<!doctype html>
<html lang="en">

<head>
  <?php include "layouts/head.php" ?>
  <title>Space Roastery</title>
</head>

<body>
  <?php include "layouts/navbar.php" ?>

  <!-- Slide Show -->
  <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/slide-2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slide-3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slide-4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slide-1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Slide show -->

  <!-- Section Product -->
  <section>
    <div class="wrap mb-5">
      <div class="produk justify-content-center">
        <h2 class="text-center mt-8 mb-5"><b>Produk <span style="color:#EE6924;">Terpopuler</span></b></h2>
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="width: 15rem;">
              <img src="assets/img/product/gayo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Gayo Apple Cider</h5>
                <!-- <p>Bridge To Specialty Filter Coffee</p> -->
                <a href="#" class="card-link">Rp125.000</a>
                <a href="#" class="btn float-end btn-sm btn-primary">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 15rem;">
              <img src="assets/img/product/lintong.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lintong</h5>
                <!-- <p></p> -->
                <a href="#" class="card-link">Rp125.000</a>
                <a href="#" class="btn float-end btn-sm btn-primary">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 15rem;">
              <img src="assets/img/product/nutella.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nutella</h5>
                <!-- <p></p> -->
                <a href="#" class="card-link">Rp125.000</a>
                <a href="#" class="btn float-end btn-sm btn-primary">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 15rem;">
              <img src="assets/img/product/strawberry.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Strawberry</h5>
                <!-- <p></p> -->
                <a href="#" class="card-link">Rp125.000</a>
                <a href="#" class="btn float-end btn-sm btn-primary">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a href="produk.php" class="selengkapnya btn btn-primary mt-5">Lihat Selengkapnya</a></div>
      </div>
    </div>
  </section>
  <!-- End Section Product -->

  <!-- Section produk terbaru -->
  <section>
    <div class="wrap bg-terbaru">
      <div class="terbaru">
        <h2 class="text-center"><b>Produk <span style="color:#EE6924;">Terbaru</span></b></h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-5">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/product/gayo.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gayo Apple Cider</h5>
                    <p class="card-text">Bridge To Specialty Filter Coffee</p>
                    <p class="card-text"><small class="btn btn-sm btn-primary">Detail</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-5">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/product/lintong.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gayo Apple Cider</h5>
                    <p class="card-text">Bridge To Specialty Filter Coffee</p>
                    <p class="card-text"><small class="btn btn-sm btn-primary">Detail</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-5">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/product/nutella.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gayo Apple Cider</h5>
                    <p class="card-text">Bridge To Specialty Filter Coffee</p>
                    <p class="card-text"><small class="btn btn-sm btn-primary">Detail</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/product/strawberry.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gayo Apple Cider</h5>
                    <p class="card-text">Bridge To Specialty Filter Coffee</p>
                    <p class="card-text"><small class="btn btn-sm btn-primary">Detail</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/product/gayo.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gayo Apple Cider</h5>
                    <p class="card-text">Bridge To Specialty Filter Coffee</p>
                    <p class="card-text"><small class="btn btn-sm btn-primary">Detail</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="assets/img/product/gayo.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Gayo Apple Cider</h5>
                    <p class="card-text">Bridge To Specialty Filter Coffee</p>
                    <p class="card-text"><small class="btn btn-sm btn-primary">Detail</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a href="produk.php" class="selengkapnya btn btn-primary mt-5">Lihat Selengkapnya</a></div>
      </div>
    </div>
  </section>
  <!-- End section produk terbaru -->


  <!-- Section Alasan -->
  <section>
    <div class="wrap">
      <div class="alasan mt-8 mb-5">
        <div class="row">
          <div class="col-md-6">
            <img style="width: 100%;" class="img-fluid" src="assets/img/slide-5.jpg">
          </div>
          <div class="col-md-6">
            <h3 class="mt-4 ms-4">Space Roastery</h3>
            <p class="ms-4 mt-3 pr-2">
              Singkat cerita, pada waktu kami kembali lagi tinggal di Indonesia, kami menemukan kejanggalan, di
              negara yang merupakan penghasil salah satu penghasil kopi terbesar di dunia, kami kesusahan untuk
              mendapatkan kopi berkualitas yang selalu kami konsumsi pada saat kami masih di luar negeri.
            </p>
            <p class="ms-4 mt-3">
              Untuk mengetahui lebih lanjut, silahkan klik tombol berikut
            </p>
            <a href="aboutus.php" class="btn btn-primary ms-4">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End section alasan -->

  <!-- Section review -->
  <section>
    <div class="review mt-8">
      <h2 style="text-align:center;" class="mt-5">Review <span>Pelanggan</span></h2>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="mt-4" src="assets/img/tim1.jpg">
            <div class="carousel-captiond-none d-md-block">
              <h4 class="mt-3">Shayna Fitria</h4>
              <center>
                <p class="p-review">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex esse vel tempora fugit saepe est reiciendis et nihil fugiat nulla, quis, rerum maxime illum natus aperiam consequuntur dicta quod aliquam!
                </p>
              </center>
            </div>
          </div>
          <div class="carousel-item">
            <img class="mt-4" src="assets/img/tim2.jpg">
            <div class="carousel-captiond-none d-md-block">
              <h4 class="mt-3">Sunny Y</h4>
              <center>
                <p class="p-review">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius explicabo aperiam expedita eos adipisci nihil aliquam aliquid quae, veniam vitae nemo eum ullam deleniti asperiores nobis, dolor dolorem laborum architecto!
                </p>
              </center>
            </div>
          </div>
          <div class="carousel-item">
            <img class="mt-4" src="assets/img/tim3.jpg">
            <div class="carousel-captiond-none d-md-block">
              <h4 class="mt-3">Erika Ebisawa</h4>
              <center>
                <p class="p-review">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quis quo voluptatum error fuga, soluta modi eveniet, voluptates doloremque cumque, unde omnis iusto temporibus placeat delectus deleniti. Similique, aliquam quia?
                </p>
              </center>
            </div>
          </div>
          <div class="carousel-item">
            <img class="mt-4" src="assets/img/tim4.jpg">
            <div class="carousel-captiond-none d-md-block">
              <h4 class="mt-3">Hanomi Mariagi</h4>
              <center>
                <p class="p-review">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quae dolorum aliquam id sequi eligendi illum numquam dignissimos impedit, veniam, dolor doloremque reiciendis suscipit culpa voluptatum provident unde. Dolores, autem?
                </p>
              </center>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="review-arrow carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="review-arrow carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!-- End section review -->

  <?php include "layouts/footer.php" ?>
  <?php include "layouts/footer-script.php" ?>

</body>

</html>