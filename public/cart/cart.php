<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../styles.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<header class="bg-dark w-100">
    <nav class="nav-bar ai-c jc-sb py-1 max-w-80 w-90">
      <div class="nav--left ai-c">
        <div class="nav__brand">
          <div class="nav__brand__logo mr-2">
            <img class="nav__brand__logo__img" src="../images/H_White.png" alt="waves-icon" />
          </div>
          <div class="nav__brand__name">
            <a class="brand-name--sm-w" href="../home/index.php">Harmony House</a>
          </div>
        </div>
        <div class="nav__menu--short px-3 py-1 ai-c">
          <div><a href="/index.html"><i class="fas fa-bars"></i></a></div>
        </div>
        <!-- <div class="nav__menu ai-c tupper">
          <a class="nav__menu__item" href="/index.html">
            <div class="nav__menu__item co-r ai-c">
              <div class="nav__menu__item-icon mr-2"><i class="fas fa-home"></i></div>
              <div class="nav__menu_item-text">home</div>
            </div>
          </a>
          <a class="nav__menu__item" href="#">
            <div class="nav__menu__item co-l ai-c">
              <div class="nav__menu__item-icon mr-2"><i class="fas fa-record-vinyl"></i></div>
              <div class="nav__menu_item-text">collection</div>
            </div>
          </a>
          <a class="nav__menu__item" href="#">
            <div class="nav__menu__item co-l ai-c">
              <div class="nav__menu__item-icon mr-2"><i class="fas fa-shopping-cart"></i></div>
              <div class="nav__menu_item-text">shopping</div>
            </div>
          </a>
        </div> -->
      </div>
      <div class="nav--right ai-c d-none d-lg-flex h-100">
        <?php
        if (isset($_SESSION['username'])) {
            $username = htmlspecialchars($_SESSION['username']);
            echo '
            <button class="loginBTN" disabled>
              <div class="wrapper">
                <span>'.$username.'</span>
                <div class="circle circle-12"></div>
                <div class="circle circle-11"></div>
                <div class="circle circle-10"></div>
                <div class="circle circle-9"></div>
                <div class="circle circle-8"></div>
                <div class="circle circle-7"></div>
                <div class="circle circle-6"></div>
                <div class="circle circle-5"></div>
                <div class="circle circle-4"></div>
                <div class="circle circle-3"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-1"></div>
              </div>
            </button>
            
            <button class="logoutBtn" onclick="window.location.href=\'logout.php\'">
              <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
              <div class="text">Logout</div>
            </button>


            ';
        } else {
            echo '
            <button class="loginBTN" onclick="window.location.href=\'login.html\'">
              <div class="wrapper">
                <span>Login</span>
                <div class="circle circle-12"></div>
                <div class="circle circle-11"></div>
                <div class="circle circle-10"></div>
                <div class="circle circle-9"></div>
                <div class="circle circle-8"></div>
                <div class="circle circle-7"></div>
                <div class="circle circle-6"></div>
                <div class="circle circle-5"></div>
                <div class="circle circle-4"></div>
                <div class="circle circle-3"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-1"></div>
              </div>
            </button>
            ';
        }
        ?>
      </div>
    </nav>
  </header>

    <div class="container-fluid mt-5 p-3 rounded cart">
        <div class="pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Product</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Price</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Quantity</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Remove</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items">
                                    <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $item) {
                                            echo '
                                            <tr data-id="'.$item['id'].'">
                                                <th scope="row" class="border-0">
                                                    <div class="p-2">
                                                        <img src="../images/'.$item['id'].'.jpg" alt="'.$item['name'].'" width="70" class="img-fluid rounded shadow-sm">
                                                        <div class="ml-3 d-inline-block align-middle">
                                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">'.$item['name'].'</a></h5>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="border-0 align-middle"><strong>$'.$item['price'].'</strong></td>
                                                <td class="border-0 align-middle"><input type="number" class="form-control quantity quantity-sm" value="'.$item['quantity'].'" min="1"></td>
                                                <td class="border-0 align-middle"><a href="#" class="text-dark remove-item"><i class="fa fa-trash"></i></a></td>
                                            </tr>';
                                        }
                                    } else {
                                        echo '<tr><td colspan="4" class="text-center">Your cart is empty.</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong id="cart-subtotal">$0</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold" id="cart-total">$0</h5>
                                </li>
                            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Proceed to checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            updateCartTotals();

            $(document).on('click', '.remove-item', function(e) {
                e.preventDefault();
                const row = $(this).closest('tr');
                const productId = row.data('id');
                removeFromCart(productId, row);
            });

            $(document).on('change', '.quantity', function() {
                const row = $(this).closest('tr');
                const productId = row.data('id');
                const newQuantity = $(this).val();
                updateCartItem(productId, newQuantity);
            });
        });

        function removeFromCart(productId, row) {
            $.ajax({
                url: 'remove_from_cart.php',
                type: 'POST',
                data: { id: productId },
                success: function(response) {
                    row.remove();
                    updateCartTotals();
                },
                error: function(xhr, status, error) {
                    console.error('Error removing item from cart:', error);
                }
            });
        }

        function updateCartItem(productId, quantity) {
            $.ajax({
                url: 'update_cart_item.php',
                type: 'POST',
                data: { id: productId, quantity: quantity },
                success: function(response) {
                    updateCartTotals();
                },
                error: function(xhr, status, error) {
                    console.error('Error updating cart item:', error);
                }
            });
        }

        function updateCartTotals() {
            $.ajax({
                url: 'get_cart_totals.php',
                type: 'GET',
                success: function(response) {
                    const cart = JSON.parse(response);
                    $('#cart-subtotal').text('$' + cart.totalPrice);
                    $('#cart-total').text('$' + (cart.totalPrice + 10)); // Adding shipping cost
                },
                error: function(xhr, status, error) {
                    console.error('Error updating cart totals:', error);
                }
            });
        }
    </script>
</body>
</html>
