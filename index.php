<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecom</title>
  <!-- bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- navbar -->
  <div class="container-fluid p-0">
    <!-- first chlid -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-shoe-prints"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search bar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">Agile Footwears</h3>
      <p class="text-center">This is place for all your necessary footwears.</p>
    </div>

    <!-- pratik start -->
    <!-- <div class="slider-container">
    <div class="slider">
        <div class="slide">
            <img src="./images/adv1.jpg" alt="Advertisement 1">
            <div class="caption">Brand new Jordan</div>
        </div>
        <div class="slide">
            <img src="./images/adv2.jpg" alt="Advertisement 2">
            <div class="caption">Caption for Advertisement 2</div>
        </div>
    </div>
    <div class="navigation-arrows">
        <button class="prev">Prev</button>
        <button class="next">Next</button>
    </div>
</div> -->
    <!-- end -->

    <!-- fourth child -->
    <div class="row">
      <div class="col-md-2 bg-secondary p-0">
        <!-- <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-success">
          <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Brand1</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Brand2</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Brand3</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Brand4</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Brand5</a>
        </li>
      </ul> -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-success">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Category1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Category2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Category3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Category4</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Category5</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10">
        <!-- products -->
        <div class="row">
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img1.avif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jog Flow 100 - Grey</h5>
                <p class="card-text">Running shoes for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary" onclick="showProductDetails(1)">View More</a>

              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img2.avif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jog Flow 500 - Black</h5>
                <p class="card-text">Running shoes for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Dunk High</h5>
                <p class="card-text">Sneakers for men</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img4.avif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Jordan Spiderman edition</h5>
                <p class="card-text">Limited edition spider man sneakers for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Dunk High</h5>
                <p class="card-text">Sneakers for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Dunk High</h5>
                <p class="card-text">Sneakers for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Dunk High</h5>
                <p class="card-text">Sneakers for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Dunk High</h5>
                <p class="card-text">Sneakers for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nike Dunk High</h5>
                <p class="card-text">Sneakers for men.</p>
                <a href="#" class="btn btn-success">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- last child -->
    <div class="bg-secondary p-3 text-center">
      <p>All rights reserved ©- Designed by Agile-2024</p>
    </div>
  </div>
  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>