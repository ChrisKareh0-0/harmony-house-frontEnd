<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="./product_Info.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="add_to_Cart.js"></script>
    <link href="../styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <!-- Demo page created by https://github.com/petr-goca -->
  <header class="bg-dark w-100">
    <nav class="nav-bar ai-c jc-sb py-1 max-w-80 w-90">
      <div class="nav--left ai-c">
        <div class="nav__brand">
          <div class="nav__brand__logo mr-2">
            <img class="nav__brand__logo__img" src="../images/H_White.png" alt="waves-icon" />
          </div>
          <div class="nav__brand__name">
            <a class="brand-name--sm-w" href="/index.html">Harmony House</a>
          </div>
        </div>
        <div class="nav__menu--short px-3 py-1 ai-c">
          <div><a href="/index.html"><i class="fas fa-bars"></i></a></div>
        </div>
        <div class="nav__menu ai-c tupper">
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
        </div>
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
   
  <section aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
    <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="thumbs">
              <a class="thumb-image active" href="../images/stratocaster_relic.jpg" data-index="0">
                <span><img src="../images/stratocaster_relic.jpg" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="../images/stratocaster_relic2.jpg" data-index="1">
                <span><img src="../images/stratocaster_relic2.jpg" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="../images/stratocaster_relic3.jpg" data-index="2">
                <span><img src="../images/stratocaster_relic3.jpg" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="../images/stratocaster_relic4.jpg" data-index="3">
                <span><img src="../images/stratocaster_relic4.jpg" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
            </div>
            <div class="big">
              <span id="big-image" class="img" quickbeam="image" style="background-image: url('../images/stratocaster_relic.jpg')" data-src="../images/stratocaster_relic.jpg"></span>
              <div id="banner-gallery" class="swipe">
                <div class="swipe-wrap">
                  <div style="background-image: url('../images/stratocaster_relic.jpg')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                </div>
              </div>
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                  <!-- <a target="_blank"  class="share-facebook" title="Share"></a>
                  <a target="_blank"  class="share-twitter" title="Tweet"></a>
                  <a target="_blank"  class="share-pinterest" title="Pin it"></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name">Fender Stratocaster</h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="USD">
              <link itemprop="availability" href="http://schema.org/InStock">
              <div class="price-shipping">
                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                  $800.00
                </div>
                <a>Free shipping</a>
              </div>
              
              <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
              <form id="AddToCartForm">
               
                <div class="btn-and-quantity-wrap">
                  <div class="btn-and-quantity">
                    <div class="spinner">
                      <span class="btn minus" data-id="2721888517"></span>
                      <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                      <input type="hidden" id="product_id" name="product_id" value="2721888517">
                      <input type="hidden" id="product_name" name="product_name" value="Fender Stratocaster">
                      <input type="hidden" id="product_price" name="product_price" value="800.00">
                      <span class="q">Qty.</span>
                      <span class="btn plus" data-id="2721888517"></span>
                    </div>
                    <button type="button" class="Cartbtn" onclick="addToCart()"> Add To Cart</button>
                    
                    <h3>Description</h3>
                    
                  </div>
                </div>
              </form>
              
              <div class="social-sharing-btn-wrapper">
                <span id="social_sharing_btn">Share</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="related">
      <div class="_cont">
        <h2>You might also like</h2>
        <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
          <a class="product-box">
            <span class="img">
              <span style="background-image: url('../images/Les Paul Gibson.jpg')" class="i first"></span>
              <span class="i second" style="background-image: url('../images/Les Paul Gibson.jpg')"></span>
            </span>
            <span class="text">
              <strong>Fender Stratocaster</strong>
              <span>
                From $800.00
              </span>
              
            </span>
          </a>
          <a class="product-box">
            <span class="img">
              <span style="background-image: url('../images/PRS Custom 24.jpg')" class="i first"></span>
              <span class="i second" style="background-image: url('../images/PRS Custom 24.jpg')"></span>
            </span>
            <span class="text">
              <strong>Fender Stratocaster 3</strong>
              <span>
                From $800.00
              </span>
             
            </span>
          </a>
          <a href="/collections/men/products/copy-of-copy-of-copy-of-tommy-hilfiger-t-shirt-new-york-4" class="product-box">
            <span class="img">
              <span style="background-image: url('../images/Gretsch Falcon.jpg')" class="i first"></span>
              <span class="i second" style="background-image: url('../images/Gretsch Falcon.jpg')"></span>
            </span>
            <span class="text">
              <strong>Fender Stratocaster 4</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box">
            <span class="img">
              <span style="background-image: url('../images/Fender Telecaster.jpg')" class="i first"></span>
              <span class="i second" style="background-image: url('../images/Fender Telecaster.jpg')"></span>
            </span>
            <span class="text">
              <strong>Fender Stratocaster 5</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box hidden">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_bba77d82-7f85-47af-9a45-f4700bcc04ad_grande.jpg?v=1447530689')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_f065e961-d296-48a8-8a67-a3532200e257_grande.png?v=1447530689')"></span>
            </span>
            <span class="text">
              <strong>Fender Stratocaster 6</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <a class="product-box hidden">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_bf59c7f2-7c1f-4822-9494-6a984598a56c_grande.jpg?v=1447530706')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_c6fa0fc1-99a0-4bd0-a1d8-0270127977fc_grande.jpg?v=1447530706')"></span>
            </span>
            <span class="text">
              <strong>Fender Stratocaster 7</strong>
              <span>
                From $800.00
              </span>
             
            </span>
          </a>
        </div>
        <div class="more-products" id="more-products-wrap">
          <span id="more-products" data-rows_per_page="1">More products</span>
        </div>
      </div>
    </aside>
  </div>

</section>


<!-- Quickbeam cart-->

<div id="quick-cart" quickbeam="cart">
  <a id="quick-cart-pay" quickbeam="cart-pay" class="cart-ico">
    <span>
      <strong class="quick-cart-text">Pay<br></strong>
      <span id="quick-cart-price">0</span>
      <span id="quick-cart-pay-total-count">0</span>
    </span>
  </a>
</div>

<!-- Quickbeam cart end -->

<!-- Quickbeam cart end -->  
  
  
<script>
    function addToCart() {
        // Get product details
        const productId = document.getElementById('product_id').value;
        const productName = document.getElementById('product_name').value;
        const productPrice = document.getElementById('product_price').value;
        const quantity = document.getElementById('updates_2721888517').value;

        // Create a cart item object
        const cartItem = {
            id: productId,
            name: productName,
            price: productPrice,
            quantity: quantity
        };

        // Send the cart item to the server using AJAX
        $.ajax({
            url: 'add_to_cart.php',
            type: 'POST',
            data: cartItem,
            success: function(response) {
                // Update the cart UI with the new cart item
                // Assuming you have a function updateCartUI to update the cart UI
                updateCartUI(response);
            },
            error: function(xhr, status, error) {
                console.error('Error adding item to cart:', error);
            }
        });
    }

    function updateCartUI(cartData) {
        // Parse the cart data
        const cart = JSON.parse(cartData);

        // Update the cart total price and total item count
        document.getElementById('quick-cart-price').textContent = cart.totalPrice;
        document.getElementById('quick-cart-pay-total-count').textContent = cart.totalItems;

        // Optionally, update the cart items list if you have one
        // ...
    }
</script>
</body>
</html>
