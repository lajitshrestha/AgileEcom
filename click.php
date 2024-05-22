<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agile Footwears</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Agile Footwears</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="bg-light text-center py-4 rounded">
            <h3>Welcome to Agile Footwears</h3>
            <p>Explore our collection of trendy footwears.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <?php
            include_once "connection/connect.php";
            $sql = "SELECT * FROM product, category WHERE product.category_id = category.category_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col">
                        <div class="product" data-url="product_view.php?product_id=<?php echo $row["product_id"]; ?>" onclick="redirectToProduct(this)">
                            <img src="<?php echo $row["product_image"]; ?>" alt="Product Image">
                            <h5><?php echo $row["product_name"]; ?></h5>
                            <p><span class="highlighted-price">$<?php echo $row["price"]; ?></span></p>
                            <!-- Add to Cart Button -->
                            <button class="btn btn-primary btn-sm me-2" onclick="event.stopPropagation(); addToCart(<?php echo $row['product_id']; ?>)">Add to Cart</button>
                            <!-- Buy Now Button -->
                            <button class="btn btn-success btn-sm" onclick="event.stopPropagation(); buyNow(<?php echo $row['product_id']; ?>)">Buy Now</button>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='mt-4'>No products found</p>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-4">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Agile Footwears. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- Custom JS link -->
    <script src="userscript.js"></script>
</body>
</html>