<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#">
      <img id="logo-brand" src="assets/img/spacecompanylogo1.png" alt="Ags Shop">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <!-- <ul class="navbar-nav mx-auto me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;"> -->
      <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link <?php if ($thisPage == "index") echo "active"; ?>" href="./">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($thisPage == "about") echo "active"; ?>" href="aboutus.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($thisPage == "produk") echo "active"; ?>" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($thisPage == "kontak") echo "active"; ?>" href="kontak.php">Kontak</a>
        </li>
      </ul>
      <form class="d-flex me-5">
        <a href="checkout.php">
          <img src="assets/img/keranjang.svg" alt="">
        </a>
        <a href="#">
          <img src="assets/img/akun.svg" alt="">
        </a>
      </form>
    </div>
  </div>
</nav>
<!-- End Navbar -->