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
    <!--css -->
    <style>
       
       .navbar-brand {
            padding-left:50px;
           
       }
       
            @media (min-width: 900px) {
            .card {
                width: 16rem;
            }
            }

            .nav-item a {
                text-transform: uppercase;
                color: grey !important;
                font: "Roboto";
                font-size: 15px;
                letter-spacing: 1,5px;
                text-decoration: none;
                outline: none;
                margin: 0 34px;
                cursor: pointer;
                }

            .nav-item a:hover,
            .nav-item a:active {
                text-decoration: underline;
                font-weight: bold;
                }

                .box-title-content {
                    margin: 2rem auto 5rem auto;
                    padding: 2rem;
                    width: 600px;
                    text-align: center;
                    background-color: transparent;
                    border: 2px solid black;
               
        
                    /* margin: 10px -15px -15px; */
                }

             /* coba */
             .container-fluid {
                position: relative;
                width: 50%;
                }

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container-fluid:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;

          
}        
                
    </style>
    <!-- akhir css -->
<body>
     <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <!-- Image and text -->
                <a class="navbar-brand" href="#">
                          <!-- <img src="img/1navbar.jpg" alt="" width="30" height="24" class="d-inline-block align-top"> -->
               FAMEAL
                </a>
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
                <img src="img/coba.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>“One should eat to live, not live to eat.”</h5>
                    <p>-Moliere-</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/coba1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>“Food is for eating, and good food is to be enjoyed... I think food is, actually, very beautiful
                        in itself.”</h5>
                    <p>-Delia Smith-</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/coba2.jpg" class="d-block w-100">
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
    </div>
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
        <div class="row"style="padding-top:20px;">
             <div class="col"> 
                 <div class="card">
            <img src="img/2menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
         </div>
    </div></div>
              <div class="col"> <div class="card ">
            <img src="img/3menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
  </div></div>

              <div class="col"> <div class="card ">
            <img src="img/4menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
</div></div>
              <div class="col"> <div class="card ">
            <img src="img/6menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
</div></div>
         </div>
    </div>
    </section>

    <!-- akhir menu  -->

     <!-- menu makanan  -->
     <section class="food"style="padding-top:40px">
          <div class="container-custome shop-page">
            <div class="cof-header">
                <div class="box-title">
                    <div class="box-title-content">
                        <p style="font-size: 28px; font-weight: bold;" class="section-title">Food From Indonesia </p>
                     
                    </div>
                </div>
        <div class="list-product">
            <div class="container-fluid">
            <img src="./img/papeda-papua.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">hello world</div>
            </div>
            </div>

    </section>
     <!-- akhir menu makanan  -->
    
    
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- <script src="./js/bootstrap.min.js"></script> -->

    <!-- <script>
        $(document).scroll(function(){
            if($(window).scrollTop() > 50){
                $('#navbar').removeClass('bg-light').addClass('bg-nontrans');
            } else if ($(window).scrollTop() <= 50){
                $('#navbar').removeClass('bg-nontrans').addClass('bg-light');
            }
        });
    </script> -->
</body>
</html>