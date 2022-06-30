<!doctype html>
<html lang="en">

<head>
    <?php include "layouts/head.html" ?>
    <title>Space Roastery</title>

    <style>
   .gradient-custom {
background: white;
}
.produk .card {
    border: none;
    border-radius: 20px;
    box-shadow: 5px 5px 15px rgba(165, 168, 204, 0.3);
}
    </style>
</head>

<body onload="myFunction()">

    <?php include "layouts/navbar.html" ?>
    <div class="py-3"></div>
    
    <!-- Content -->
    <section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4" style="border-radius: 20px;">
          <div class="card-header py-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <h5 class="mb-0">2 Item Di Keranjang Anda</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="assets/img/product/gayo.jpg"
                    class="w-100" style="border-radius: 30px; padding: 20px;"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Gayo Apple Cider</strong></p>
                <p>Kemasan : 200g</p>
                <button type="button" class="btn btn-secondary btn-sm me-1 mb-2" style="background: red; border-color: red;" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-secondary px-3 me-2" style="border-radius: 8px;"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); myFunction()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" oninput="myFunction()"/>
                    <label class="form-label" for="form1">Jumlah</label>
                  </div>

                  <button class="btn btn-secondary px-3 ms-2" style="border-radius: 8px;"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); myFunction()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong id="harga-item-1">125000</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="assets/img/product/lintong.jpg"
                    class="w-100" style="border-radius: 30px; padding: 20px;"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Lintong</strong></p>
                <p>Kemasan : 200g</p>

                <button type="button" class="btn btn-secondary btn-sm me-1 mb-2" style="background: red; border-color: red;" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style=" max-width: 300px">
                  <button class="btn btn-secondary px-3 me-2" style="border-radius: 8px;"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); myFunction()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form2" min="0" name="quantity" value="1" type="number" class="form-control" oninput="myFunction()"/>
                    <label class="form-label" for="form2">Jumlah</label>
                  </div>

                  <button class="btn btn-secondary px-3 ms-2" style="border-radius: 8px;"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); myFunction()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong id="harga-item-2">125000</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>

      </div>
      <div class="col-md-4">
        <div class="card mb-4" style="border-radius: 20px;">
          <div class="card-header py-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <h5 class="mb-0">Total Pembayaran</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Produk
                <span id="total">0</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Pengiriman
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Jumlah Total</strong>
                  <strong>
                    <p class="mb-0">(termasuk PPN)</p>
                  </strong>
                </div>
                <span id="grand-total"><strong>0</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-secondary btn-lg btn-block" style="border-radius: 8px; background: #EE6924; border-color: #EE6924;">
              Bayar Sekarang
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    function myFunction() {
        var price1 = 125000;
        var price2 = 125000;

        var jml1 = document.getElementById("form1").value;
        var jml2 = document.getElementById("form2").value;
        var total1 = +price1 * +jml1;
        var total2 = +price2 * +jml2;
        var total = +total1 + +total2;

        document.getElementById("total").innerHTML = total;
        document.getElementById("grand-total").innerHTML = total;
    }
</script>

    <!-- End Content -->

    <?php include "layouts/footer.html" ?>
    <?php include "layouts/footer-script.html" ?>

</body>

</html>