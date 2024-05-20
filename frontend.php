<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 15px;
            /* Adjust padding for consistent spacing */
            margin-bottom: 20px;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        .sidebar {
            background-color: #6c757d;
            padding: 20px;
            color: #fff;
        }

        .sidebar h4 {
            color: #fff;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

            {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .navbar-brand i {
            font-size: 1.5em;
        }

        .nav-link.active {
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #4CAF50;
        }

        .product {
            border: 1px solid #dee2e6;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .product h5 {
            font-size: 1.25em;
            margin-bottom: 10px;
        }

        .product p {
            font-size: 1em;
            color: #6c757d;
        }

        .product p.price {
            font-size: 1.2em;
            color: #4CAF50;
            font-weight: bold;
        }

        .sidebar {
            background-color: #343a40;
            padding: 20px;
            color: #fff;
            border-radius: 8px;
        }

        .sidebar h4 {
            color: #fff;
            margin-bottom: 15px;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #4CAF50;
            color: #fff;
        }

        .bg-light h3,
        .bg-light p {
            margin: 0;
            padding: 20px 0;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin-bottom: 10px;
            }

            .sidebar {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-shoe-prints"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#category1">Converse</a></li>
                            <li><a class="dropdown-item" href="#category2">Boots</a></li>
                            <li><a class="dropdown-item" href="#category3">Loafers</a></li>
                            <li><a class="dropdown-item" href="#category4">Sports</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><sup>1</sup></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search bar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Welcome and Login section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Banner section -->
    <div class="bg-light">
        <h3 class="text-center">Agile Footwears</h3>
        <p class="text-center">This is a place for all your necessary footwears.</p>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <?php
                    include_once "connection.php";
                    $sql = "SELECT * FROM product, category WHERE product.category_id = category.category_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-4">';
                            echo '<div class="product">';
                            echo '<img src="' . $row["product_image"] . '" class="card-img-top" alt="Product Image">';
                            echo '<h5 class="card-title">' . $row["product_name"] . '</h5>';
                            echo '<p class="card-text">' . $row["product_desc"] . '</p>';
                            echo '<p>Category: ' . $row["category_name"] . '</p>';
                            echo '<p>Price: ' . $row["price"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "No products found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-secondary p-3 text-center">
        <p>All rights reserved ©- Designed by Agile-2024</p>
    </div>

    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r+NFJG0KzixOMbHe6AcYd1w=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-JkgLM35Ns3Gx9v3NZExFJ8WXLM8VpwhvsAzlC2K0XBscwbcb5PQCL52s25czK/Zz"
        crossorigin="anonymous"></script>
</body>

</html>