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
       body,html {
        height: 100%;
       }
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
                /* color: grey !important; */
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
                    margin: -1.5rem auto 5rem auto;
                    padding: 1rem;
                    width: 600px;
                    text-align: center;
                    background-color: transparent;
                    border: 2px solid black;
                    color: white;
                   
                    
                    
               
        
                    /* margin: 10px -15px -15px; */
                }

             /* coba */
             .container-fluid {
                position: relative;
                width: 30%;
                
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
                background-image: linear-gradient(to bottom right,transparent, black);
                /* background-color:  grey !important; */
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
               

                        
                }
                
                .food .list-product {
                    opacity:0;

                }

                .food .list-produk.muncul{
                    opacity:1;
                }
                                
    </style>
    <!-- akhir css -->
<body>
     <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <!-- Image and text -->
                <a class="navbar-brand" href="#">
                          <img src="img/8nav.png" alt="" width="140" height="40" class="d-inline-block align-top">
               
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
            <img src="img/1menu.jpg" class="card-img-top" alt="...">
            <div class="card">
    
  </div>
</div></div>
         </div>
    </div>
    </section>

    <!-- akhir menu  -->

     <!-- menu makanan  -->
     <section class="food" id="food" style="padding-top:100px;  background-image: url('img/4backmakanan.jpg');  padding-top:100px; margin-top:70px; background-size:cover; min-height:100vh";>
    
        
          <div class="container-custome shop-page">
            <div class="cof-header">
                <div class="box-title">
                    <div class="box-title-content">
                        <p style="font-size: 30px; font-weight: bold; text-align:center; " class="section-title">Food From Indonesia </p>
                     
                    </div>
                </div>
               
      

      <section class="menu-makanan">  
      <table>
      <tr>
                <td>
         <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/papeda-papua.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center;">Papeda-Papua</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Makanan berupa bubur sagu yang kerap dimakan bersama mubara atau ikan tongkol yang dibumbui dengan kunyit</p>
                </div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
                    </td>
                    <td>
            <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/rendang-sumatraBarat.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">Rendang-Sumatra</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Masakan daging asli Indonesia yang dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan</p></div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
            </td>

            <td>
            <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/nasiLiwet-jawa.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">Nasi Liwet-Jawa Tengah</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Nasi gurih dimasak dengan kelapa, yang disajikan dengan sayur labu siam, suwiran ayam dan areh</p></div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
            </td>

            <td>
            <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/rawon-jawatimur.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">Rawon-JawaTimur</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek</p></div>
                </div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
            </td>
                </tr>
                </div>
            </table>   


        <div class="makanan2" style="padding-top:50px;"> 
      <table>
      <tr>
                <td>
         <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/lemang-medan2.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">Lemang-Medan</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Makanan dari beras ketan yang dimasak dalam seruas bambu, setelah sebelumnya digulung dengan selembar daun pisang</p></div></div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
                    </td>

                    <td>
         <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/Ganganmanuk-kalimantan.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">Gangan Manok-Kalimantan Timur</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Sayur bening sejenis dengan makanan bakso dengan pelengkap bola-bola ayam</p></div></div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
                    </td>

                    <td>
         <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/nasiayamsemarang-semarang.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">NasiAyam-Semarang</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Makanan dari suwiran daging ayam, sambal goreng labu siam dan krecek, tahu putih, dan telur pindang laludi kasih dengan kuah santan.</p></div></div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
                    </td>

                    <td>
         <div class="list-product">
            <div class="container-fluid">
            <div class="row"style="padding-bottom:-1000px;">
             <div class="col"> 
                 <div class="card">
            <img src="./img/gadogado-betawi.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">
                <p style="font-size:15px; text-align:center">Gado Gado-Betawi</p>
                <hr>
                <p style="font-size:10px; text-align:center;" >Makanan dari sayur-sayuran yang direbus dan dicampur jadi satu, dengan bumbu kacang tanahyang dihaluskan disertai irisan telur</p></div></div>
                <div class="card">
                </div>
            </div></div>
            </div>
            </div>
            </div>
            </div>
                    </td>

                    
        </tr>
            </table>
   </div> 
    </section>    

 </section>
  
     <!-- akhir menu makanan  -->
    
    
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- <script src="./js/bootstrap.min.js"></script> -->

    <script>
    //paralax menu makanan
    if( wScroll > 100 ) {
        console.log('ok'); 
    } 
    </script>
</body>
</html>