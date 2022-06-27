<!doctype html>
<html lang="en">

<head>
    <?php include "layouts/head.html" ?>
    <title>Space Roastery</title>

    <style>
   .gradient-custom {
background: white;
}
    </style>
</head>

<body>
    <?php include "layouts/navbar.html" ?>
    <div class="py-3"></div>
    
    <!-- Content -->
    <section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - 2 items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Blue denim shirt</strong></p>
                <p>Size: M</p>
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" style="background: red; border-color: red;" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-secondary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); myFunction()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" oninput="myFunction()"/>
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button class="btn btn-secondary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); myFunction()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong id="harga-item-1">100000</strong>
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
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Red hoodie</strong></p>
                <p>Size: M</p>

                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" style="background: red; border-color: red;" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-secondary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); myFunction()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form2" min="0" name="quantity" value="1" type="number" class="form-control" oninput="myFunction()"/>
                    <label class="form-label" for="form2">Quantity</label>
                  </div>

                  <button class="btn btn-secondary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); myFunction()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong id="harga-item-2">100000</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
              alt="PayPal acceptance mark" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span id="total">0</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span id="grand-total"><strong>0</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-secondary btn-lg btn-block" style="background: #EE6924; border-color: #EE6924;">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    function myFunction() {
        // var price = document.getElementById("harga-item-1").value;
        var price = 100000;
        var price = 100000;

        var jml1 = document.getElementById("form1").value;
        var jml2 = document.getElementById("form2").value;
        var total1 = +price * +jml1;
        var total2 = +price * +jml2;
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