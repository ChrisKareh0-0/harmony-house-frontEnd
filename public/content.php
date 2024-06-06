<?php
// Start the session at the very top of the file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/ad0c4e912f.js"
      crossorigin="anonymous"
      
    >
  </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap"
      rel="stylesheet"
    />
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <link href="../public/css/content.css" rel="stylesheet" type="text/css" />
    <title>Harmony House</title>
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
      <div class="profile-icon d-none d-md-flex d-lg-none"><i class="fas fa-user"></i></div>
      <div class="nav--right ai-c d-none d-lg-flex h-100">
        <div class="messages mr-4"><a href="#"><i class="fas fa-envelope co-l"></i></a></div>
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
                <a class="thumb-image active" href="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025" data-index="0">
                  <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/product_150x150.png?v=1446769025" alt="Tommy Hilfiger T-Shirt New York"></span>
                </a>
                <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_1024x1024.jpg?v=1447104179" data-index="1">
                  <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_150x150.jpg?v=1447104179" alt="Tommy Hilfiger T-Shirt New York"></span>
                </a>
                <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_1024x1024.jpg?v=1447104180" data-index="2">
                  <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_150x150.jpg?v=1447104180" alt="Tommy Hilfiger T-Shirt New York"></span>
                </a>
                <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_1024x1024.jpg?v=1447104182" data-index="3">
                  <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_150x150.jpg?v=1447104182" alt="Tommy Hilfiger T-Shirt New York"></span>
                </a>
              </div>
              <div class="big">
                <span id="big-image" class="img" quickbeam="image" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025')" data-src="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025"></span>
                <div id="banner-gallery" class="swipe">
                  <div class="swipe-wrap">
                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_large.png?v=1446769025')"></div>
                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                  </div>
                </div>
                <div class="detail-socials">
                  <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                    <a target="_blank"  class="share-facebook" title="Share"></a>
                    <a target="_blank"  class="share-twitter" title="Tweet"></a>
                    <a target="_blank"  class="share-pinterest" title="Pin it"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-col">
              <h1 itemprop="name">Tony Hunfinger T-Shirt New York</h1>
              <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <meta itemprop="priceCurrency" content="USD">
                <link itemprop="availability" href="http://schema.org/InStock">
                <div class="price-shipping">
                  <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                    $800.00
                  </div>
                  <a>Free shipping</a>
                </div>
                <div class="swatches">
                  <div class="swatch clearfix" data-option-index="0">
                    <div class="header">Size</div>
                    <div data-value="M" class="swatch-element plain m available">
                      <input id="swatch-0-m" type="radio" name="option-0" value="M" checked  />
                      <label for="swatch-0-m">
                        M
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      </label>
                    </div>
                    <div data-value="L" class="swatch-element plain l available">
                      <input id="swatch-0-l" type="radio" name="option-0" value="L"  />
                      <label for="swatch-0-l">
                        L
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      </label>
                    </div>
                    <div data-value="XL" class="swatch-element plain xl available">
                      <input id="swatch-0-xl" type="radio" name="option-0" value="XL"  />
                      <label for="swatch-0-xl">
                        XL
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      </label>
                    </div>
                    <div data-value="XXL" class="swatch-element plain xxl available">
                      <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL"  />
                      <label for="swatch-0-xxl">
                        XXL
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      </label>
                    </div>
                  </div>
                  <div class="swatch clearfix" data-option-index="1">
                    <div class="header">Color</div>
                    <div data-value="Blue" class="swatch-element color blue available">
                      <div class="tooltip">Blue</div>
                      <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked  />
                      <label for="swatch-1-blue" style="border-color: blue;">
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                        <span style="background-color: blue;"></span>
                      </label>
                    </div>
                    <div data-value="Red" class="swatch-element color red available">
                      <div class="tooltip">Red</div>
                      <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red"  />
                      <label for="swatch-1-red" style="border-color: red;">
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                        <span style="background-color: red;"></span>
                      </label>
                    </div>
                    <div data-value="Yellow" class="swatch-element color yellow available">
                      <div class="tooltip">Yellow</div>
                      <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow"  />
                      <label for="swatch-1-yellow" style="border-color: yellow;">
                        <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                        <span style="background-color: yellow;"></span>
                      </label>
                    </div>
                  </div>
                  <div class="guide">
                    <a>Size guide</a>
                  </div>
                </div>
                <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
                <form id="AddToCartForm">
                  <select name="id" id="productSelect" quickbeam="product" class="product-single__variants">
                    <option  selected="selected"  data-sku="" value="7924994501">
                      M / Blue - $800.00 USD
                    </option>
                    <option  data-sku="" value="7924995077">
                      M / Red - $850.00 USD
                    </option>
                    <option  data-sku="" value="7924994437">
                      L / Blue - $850.00 USD
                    </option>
                    <option  data-sku="" value="7924994693">
                      L / Yellow - $850.00 USD
                    </option>
                    <option  data-sku="" value="7924995013">
                      L / Red - $850.00 USD
                    </option>
                    <option  data-sku="" value="7924994373">
                      XL / Blue - $900.00 USD
                    </option>
                    <option  data-sku="" value="7924994629">
                      XL / Yellow - $850.00 USD
                    </option>
                    <option  data-sku="" value="7924830021">
                      XXL / Blue - $950.00 USD
                    </option>
                    <option  data-sku="" value="7924994885">
                      XXL / Red - $850.00 USD
                    </option>
                  </select>
                  <div class="btn-and-quantity-wrap">
                    <div class="btn-and-quantity">
                      <div class="spinner">
                        <span class="btn minus" data-id="2721888517"></span>
                        <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                        <input type="hidden" id="product_id" name="product_id" value="2721888517">
                        <span class="q">Qty.</span>
                        <span class="btn plus" data-id="2721888517"></span>
                      </div>
                      <div id="AddToCart" quickbeam="add-to-cart">
                        <span id="AddToCartText">Add to Cart</span>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="tabs">
                  <div class="tab-labels">
                    <span data-id="1" class="active">Info</span>
                    <span data-id="2">Brand</span>
                  </div>
                  <div class="tab-slides">
                    <div id="tab-slide-1" itemprop="description"  class="slide active">
                      We open source it for you https://github.com/greenwoodents/quickbeam.js if you want to use it on your ecommerce.
                    </div>
                    <div id="tab-slide-2" class="slide">
                      Tony Hunfinger
                    </div>
                  </div>
                </div>
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
                <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_70d2887b-ec6a-4bcb-a93b-7fd1783e6445_grande.jpg?v=1447530130')" class="i first"></span>
                <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_030f9fc5-f253-4dca-a43a-fe2b719d0704_grande.png?v=1447530130')"></span>
              </span>
              <span class="text">
                <strong>Tony Hunfinger T-Shirt New York 2</strong>
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
                <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_357767df-d7ff-4b58-b705-edde76bb32b7_grande.jpg?v=1447530150')" class="i first"></span>
                <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_613d5776-ea61-4f9b-abef-0ce847c63a67_grande.jpg?v=1447530150')"></span>
              </span>
              <span class="text">
                <strong>Tony Hunfinger T-Shirt New York 3</strong>
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
            <a href="/collections/men/products/copy-of-copy-of-copy-of-tommy-hilfiger-t-shirt-new-york-4" class="product-box">
              <span class="img">
                <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_0e98498a-123c-4305-9d94-d8280bb46416_grande.jpg?v=1447530164')" class="i first"></span>
                <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_6c949188-dba0-4789-9434-c0821b92f3f4_grande.jpg?v=1447530164')"></span>
              </span>
              <span class="text">
                <strong>Tony Hunfinger T-Shirt New York 4</strong>
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
                <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_7d606126-1b60-4738-99b3-062810f2db8b_grande.png?v=1447530674')" class="i first"></span>
                <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_fd08d231-654c-4304-81b2-9191e6fd141e_grande.jpg?v=1447530674')"></span>
              </span>
              <span class="text">
                <strong>Tony Hunfinger T-Shirt New York 5</strong>
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
                <strong>Tony Hunfinger T-Shirt New York 6</strong>
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
                <strong>Tony Hunfinger T-Shirt New York 7</strong>
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
          </div>
          <div class="more-products" id="more-products-wrap">
            <span id="more-products" data-rows_per_page="1">More products</span>
          </div>
        </div>
      </aside>
    </div>
  
  </section>
  <footer role="contentinfo" aria-label="Footer">
    <div class="_cont">
      <div class="socials">
        <strong>follow us:</strong>
        <ul>
          <li><a  title="html-koder / test on Twitter" class="tw" target="_blank">Twitter</a></li>
          <li><a  title="html-koder / test on Facebook" class="fb" target="_blank">Facebook</a></li>
          <li><a  title="html-koder / test on Instagram" class="in" target="_blank">Instagram</a></li>
          <li><a  title="html-koder / test on Pinterest" class="pi" target="_blank">Pinterest</a></li>
        </ul>
      </div>
      <div class="top">
        <div class="right">
          <form method="post" action="/contact" class="contact-form" accept-charset="UTF-8">
            <input type="hidden" value="customer" name="form_type" /><input type="hidden" name="utf8" value="✓" />
            <div>
              <input type="hidden" id="contact_tags" name="contact[tags]" value="newsletter"/>
              <input type="text" id="contact_email" name="contact[email]" placeholder="Submit e-mail for special offers...">
              <button type="submit" title="Newsletter Signup">OK</button>
            </div>
          </form>
        </div>
        <div class="left">
          <span class="phone">+420 123 456 789</span>
          <a class="mail" href="mailto:email.from@settings.com">email.from@settings.com</a>
        </div>
      </div>
      <div class="bottom">
        <div class="left">
          <nav role="navigation" aria-label="Service menu">
            <ul>
              <li><a >Lorem ipsum</a></li>
              <li><a >About Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  
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

    <footer>
      <div class="footer__main h-80 w-90 center jc-sb pt-4">
        <div class="footer__main__about px-3">
          <div class="footer__main__about__logo">
            <div class="ai-c jc-c mb-3">
              <div class="footer__logo mr-3">
                <img
                  class="footer__logo__img"
                  src="../images/H_Black.png"
                  alt="waves-icon"
                />
              </div>
              <div class="footer__logo__name brand-name--sm-w">Harmony House</div>
            </div>
          </div>
          <p class="co-l f-hl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi unde
            quisquam quibusdam molestiae eos sit odit dolor totam vel minima
            quam modi sint, tempora numquam cum, commodi itaque sed soluta?
          </p>
        </div>
        <div class="footer__main__categories px-3">
          <div class="footer__main--title">CATEGORIES</div>
          <div class="jc-sb">
            <ul class="links">
              <li><a aria-label="this is a button" href="#">Guitars</a></li>
              <li><a aria-label="this is a button" href="#">Violins</a></li>
              <li><a aria-label="this is a button" href="#">Flutes</a></li>
              <li><a aria-label="this is a button" href="#">Pianos</a></li>
              <li><a aria-label="this is a button" href="#">Percussion</a></li>
              <li><a aria-label="this is a button" href="#">Equipments</a></li>
            </ul>
            <ul class="links">
              <li><a aria-label="this is a button" href="#">Guitars</a></li>
              <li><a aria-label="this is a button" href="#">Violins</a></li>
              <li><a aria-label="this is a button" href="#">Flutes</a></li>
              <li><a aria-label="this is a button" href="#">Pianos</a></li>
              <li><a aria-label="this is a button" href="#">Percussion</a></li>
              <li><a aria-label="this is a button" href="#">Equipments</a></li>
            </ul>
          </div>
        </div>
        <div class="footer__main__navigation px-3">
          <div class="footer__main--title">NAVIGATION</div>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="footer__main__options px-3 flex-col jc-c">
          <div class="footer__main__options--item jc-sb ai-c">
            <span class="co-r f-gb w-50">COUNTRY</span>
            <button type="button" class="btn-transparent w-50">Brazil</button>
          </div>
          <div class="footer__main__options--item jc-sb ai-c my-2">
            <span class="co-r f-gb w-50">LANGUAGE</span>
            <button type="button" class="btn-transparent w-50">Portuguese</button>
          </div>
          <div class="footer__main__options--item jc-sb ai-c">
            <span class="co-r f-gb w-50">CURRENCY</span>
            <button type="button" class="btn-transparent w-50">BRL</button>
          </div>
        </div>
      </div>
      <div class="footer__bottom ai-c jc-sb px-6">
        <div class="footer__bottom__copyright co-l">
          Copyright© 2020 wavvesmusic.com. All Rights Reserved. Inspired by
          Mohammed Awad's Zattix Design. Made by Lucas Delbel.
        </div>
        <div class="footer__bottom__social">
          <a aria-label="this is a button" href="#"><i class="fab fa-facebook-f"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-twitter"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-github-alt"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-stack-overflow"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>
