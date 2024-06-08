<?php
session_start();
$products = [
    '1' => [
        'name' => 'Gretsch Falcon',
        'price' => 120.00,
        'image' => ['../images/Gretsch Falcon.jpg', '../images/Gretsch Falcon.jpg'],
        'description' => 'A classic Gretsch guitar with iconic style and sound.'
    ],
    '2' => [
        'name' => 'Classic woody',
        'price' => 80.00,
        'image' => ['../images/stratocaster_relic3.jpg', '../images/stratocaster_relic2.jpg'],
        'description' => 'A vintage Stratocaster with a worn-in feel and classic tone.'
    ],
    // Add more products as needed
];

$product_id = $_GET['id'];
$product = $products[$product_id];
?>

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
                    <span>' . $username . '</span>
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
                <button class="loginBTN" onclick="window.location.href=\'login.php\'">
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
        <meta itemprop="image" content="<?php echo $product['image'][0]; ?>">
        <div class="shadow">
            <div class="_cont detail-top">
                <div class="cols">
                    <div class="left-col">
                        <div class="thumbs">
                            <?php foreach ($product['image'] as $index => $image) : ?>
                                <a class="thumb-image <?php echo $index === 0 ? 'active' : ''; ?>" href="<?php echo $image; ?>" data-index="<?php echo $index; ?>">
                                    <span><img src="<?php echo $image; ?>" alt="<?php echo $product['name']; ?>"></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="big">
                            <span id="big-image" class="img" quickbeam="image" style="background-image: url('<?php echo $product['image'][0]; ?>')" data-src="<?php echo $product['image'][0]; ?>"></span>
                            <div id="banner-gallery" class="swipe">
                                <div class="swipe-wrap">
                                    <?php foreach ($product['image'] as $image) : ?>
                                        <div style="background-image: url('<?php echo $image; ?>')"></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-col">
                        <h1 itemprop="name"><?php echo $product['name']; ?></h1>
                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="USD">
                            <link itemprop="availability" href="http://schema.org/InStock">
                            <div class="price-shipping">
                                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="<?php echo number_format($product['price'], 2); ?>">
                                    $<?php echo number_format($product['price'], 2); ?>
                                </div>
                                <a>Free shipping</a>
                            </div>
                            <form id="AddToCartForm">
                                <div class="btn-and-quantity-wrap">
                                    <div class="btn-and-quantity">
                                        <div class="spinner">
                                            <span class="btn minus" data-id="<?php echo $product_id; ?>"></span>
                                            <input type="text" id="updates_<?php echo $product_id; ?>" name="quantity" value="1" class="quantity-selector">
                                            <input type="hidden" id="product_id" name="product_id" value="<?php echo $product_id; ?>">
                                            <input type="hidden" id="product_name" name="product_name" value="<?php echo $product['name']; ?>">
                                            <input type="hidden" id="product_price" name="product_price" value="<?php echo number_format($product['price'], 2); ?>">
                                            <span class="q">Qty.</span>
                                            <span class="btn plus" data-id="<?php echo $product_id; ?>"></span>
                                        </div>
                                        <button type="button" class="Cartbtn" onclick="addToCart()">Add To Cart</button>
                                        <h3>Description</h3>
                                        <p><?php echo $product['description']; ?></p>
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
                    <!-- Placeholder for related products -->
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

<script>
    function addToCart() {
        // Get product details
        const productId = document.getElementById('product_id').value;
        const productName = document.getElementById('product_name').value;
        const productPrice = document.getElementById('product_price').value;
        const quantity = document.getElementById('updates_<?php echo $product_id; ?>').value;

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
