<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
     <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
           <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
     
                   <a class="navbar-brand" href="#">
                          <img src="img/1navbar.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
               FAMEAL
                </a>
        </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll nav justify-content-end ms-auto"
                    style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desserts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Snacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>
                </li>

                </ul>
    
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->

    <!-- carousel -->
    <section class="carousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/6coursel.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>“One should eat to live, not live to eat.”</h5>
                    <p>-Moliere-</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/5coursel.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>“Food is for eating, and good food is to be enjoyed... I think food is, actually, very beautiful
                        in itself.”</h5>
                    <p>-Delia Smith-</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/8coursel.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>“The chief pleasure in eating does not consist in costly seasoning, or exquisite flavor, but in
                        yourself.”</h5>
                    <p>-Horace-</p> -->
                </div>
            </div>

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </section>
    <!-- akhir carousel -->

    <!-- caption -->
    <section class="caption"style="padding-top:40px;">
        <div class="col-md-8 mx-auto text-center">
            <h3>Information About Food By Fameal</h3>
            <h6>“The chief pleasure in eating does not consist in costly seasoning, or exquisite flavor, but in
                        yourself.”</h6>
                    <p>-Horace-</p>
        </div>
    </section>
    <!-- akhir caption -->

    <!-- menu -->
    <section class="menu">
    <div class="container">
        <div class="row"style="padding-top:35px;">
             <div class="col"> <div class="card " style="width: 16rem;">
            <img src="img/2menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
         </div>
    </div></div>
              <div class="col"> <div class="card " style="width: 16rem;">
            <img src="img/3menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
  </div></div>

              <div class="col"> <div class="card " style="width: 16rem;">
            <img src="img/4menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
</div></div>
              <div class="col"> <div class="card " style="width: 16rem;">
            <img src="img/6menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
</div></div>
         </div>
    </div>
    </section>

    <!-- akhir menu -->
    
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>