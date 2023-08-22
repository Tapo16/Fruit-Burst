<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce Website</title>
  <!-- Bootstrap Css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!-- Font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container-fluid">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <img src="images/fruits.png" class="logo" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Product</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Total Price:100/-</a>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

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
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">Communication is at the heart of e-commerce and community</p>
    </div>


    <!-- fourth child -->

    <div class="row"> <!-- first row -->

      <div class="col-md-10">
        <!-- products first -->

        <!-- first -->
        <div class="row"> <!-- first row first -->
          <div class="col-md-4">

            <div class="card">
              <img src="images/apple_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-primary">view more</a>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="card">
              <img src="images/strawberry_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-primary">view more</a>
              </div>
            </div>



          </div>

          <div class="col-md-4">
            <div class="card">
              <img src="images/watermelon_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">view more</a>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card">
              <img src="images/pineapple_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">view more</a>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card">
              <img src="images/orange.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">view more</a>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card">
              <img src="images/banana_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">view more</a>
              </div>
            </div>
          </div>



        </div><!-- last row first -->



      </div>
      <!-- last of products-->



      <div class="col-md-2  bg-secondary p-0">
        <!-- sidenav -->

        <!-- brands -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Delivery Brands</h4>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Brands1</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Brands2</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Brands3</a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brands4</a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brands5</a>
          </li>
        </ul>


        <!-- categories to be displayed -->

        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Categories1</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Categories2</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Categories3</a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories4</a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories5</a>
          </li>
        </ul>



      </div>


      <!-- last child -->
      <div class="bg-info p-3 text-center">
        <p>All rights reserved and designed by A.S.T-2023</p>
      </div>

    </div> <!-- last row -->








    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>