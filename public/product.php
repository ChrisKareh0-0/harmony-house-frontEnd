<?php
session_start();
require '../src/db_config.php';
require '../src/dotenv.php';
// Fetch product details from the database
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product Information</title>
</head>
<body>
    <header class="bg-dark w-100">
        <nav class="nav-bar ai-c jc-sb py-1 max-w-80 w-90">
            <div class="nav--left ai-c">
                <div class="nav__brand">
                    <div class="nav__brand__logo mr-2">
                        <img class="nav__brand__logo__img" src="../images/H_White.png" alt="waves-icon">
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
                    <a href="logout.php" class="btn btn-danger ml-2">Logout</a>
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
    <main>
        <?php if ($product): ?>
            <div class="product-container">
                <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <p><?php echo htmlspecialchars($product['description']); ?></p>
                <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        <?php else: ?>
            <p>Product not found.</p>
        <?php endif; ?>
    </main>
    <footer>
        <!-- Your footer content -->
    </footer>
</body>
</html>
