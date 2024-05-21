<?php
include_once "./connection/connect.php";

if (!isset($_GET['product_id'])) {
    echo "No product ID provided.";
    exit;
}

$product_id = $_GET['product_id'];
$sql = "SELECT * FROM product WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    echo "<p class='mt-4'>Product not found</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product["product_name"]); ?> - Agile Footwears</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom CSS */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
        }
        .product-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product-details h3 {
            margin-top: 20px;
            font-size: 2rem;
            color: #333;
        }
        .product-details p {
            color: #666;
            margin-top: 10px;
        }
        .highlighted-price {
            color: #007bff; 
            font-weight: bold;  
            font-size: 1.5rem;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Agile Footwears</a>
        </div>
    </nav>

    <div class="container">
        <div class="product-container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo htmlspecialchars($product["product_image"]); ?>" alt="Product Image" class="product-image">
                </div>
                <div class="col-md-6 product-details">
                    <h3><?php echo htmlspecialchars($product["product_name"]); ?></h3>
                    <p class="highlighted-price">$<?php echo htmlspecialchars($product["price"]); ?></p>
                    <p><?php echo htmlspecialchars($product["product_desc"]); ?></p>
                    <!-- Buy Now Button -->
                    <button class="btn btn-primary" onclick="buyNow(<?php echo $product['product_id']; ?>)">Buy Now</button>
                    <!-- Add to Cart Button -->
                    <button class="btn btn-success ms-2" onclick="addToCart(<?php echo $product['product_id']; ?>)">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script>
        function addToCart(productId) {
            // Here you can add logic to add the product to the cart
            alert('Product added to cart successfully!');
        }

        function buyNow(productId) {
            // Redirect to the buy now page with the product ID
            window.location.href = 'buy.php?product_id=' + productId;
        }
    </script>
</body>
</html>
