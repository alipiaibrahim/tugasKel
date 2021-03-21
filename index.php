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
    
<body>
    <!-- card minuman -->
    <div class="container">
        <div class="container-custome shop-page best-kopi" id="best-kopi">
            <div class="cof-header">
                <div class="box-title">
                    <div class="box-title-content">
                        <p style="font-size: 28px; font-weight: bold;" class="section-title"> All About Drink</p>
                    </div>
                </div>
                <section class="menu-minuman" style="margin-top:-40px;">
                    <table>
                        <tr>
                            <td>
                                <div class="list-product">
                                    <div class="container-fluid" style="margin-left:-20px; margin-right:5px;">
                                        <div class="row" style="padding-bottom:-1000px;">
                                            <div class="col">
                                                <div class="card">
                                                    <img src="img/drk 1.jpg" alt="Avatar" class="image">
                                                    <div class="overlay1">
                                                        <div class="text">
                                                            <p class="tx">Ice Blended</p>
                                                            <hr>
                                                            <p class="txb">Pop Ice adalah minuman serbuk mengandung Susu yang diproduksi oleh PT. Forisa Nusapersad</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </div>
            </td>

            <td>
                <div class="list-product">
                    <div class="container-fluid" style="margin-right: 5px;">
                        <div class="row" style="padding-bottom:-1000px;">
                            <div class="col">
                                <div class="card">
                                    <img src="img/drk 2.jpeg" alt="Avatar" class="image">
                                    <div class="overlay1">
                                        <div class="text">
                                            <p style="font-size:15px; text-align:center">Ice coffe Milk</p>
                                            <hr>
                                            <p style="font-size:10px; text-align:center;">Es kopi susu kekinian dapat dibuat dengan menambahkan gula aren cair. Minuman ini bisa disajikan untuk ngopi pagi sembari sarapan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </td>

        <td>
            <div class="list-product">
                <div class="container-fluid" style="margin-right:5px;">
                    <div class="row" style="padding-bottom:-1000px;">
                        <div class="col">
                            <div class="card">
                                <img src="img/drk 3.jpg" alt="Avatar" class="image">
                                <div class="overlay1">
                                    <div class="text">
                                        <p style="font-size:15px; text-align:center">Mojito Deep Blue</p>
                                        <hr>
                                        <p style="font-size:10px; text-align:center;">Minuman mojito dengan perpaduan rasa blueberry dengan sunquick menjadi rasa minuman lezat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/drk 4.jpg" alt="Avatar" class="image">
                            <div class="overlay1">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Bir Pletok Betawi</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Minuman ini merupakan minuan penyegar yang dibuat dari campuran rempah-rempah. bir ini minuman yang sangat terkenal di kalangan masyarakat betawi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>
    </tr>
    </table>
    <!-- minuman ke 2 -->
    <div class="minuman2">
        <table>
            <tr>
                <td>
                    <div class="list-product">
                        <div class="container-fluid" style="margin-left:-20px; margin-right:5px;">
                            <div class="row" style="padding-bottom:-1000px;">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/drk 5.jpg" alt="Avatar" class="image">
                                        <div class="overlay2">
                                            <div class="text">
                                                <p class="tx">Brown Sugar Boba Milk</p>
                                                <hr>
                                                <p class="txb">Brown sugar milk tea, minuman teh kekinian yang biasanya dilengkapi dengan topping boba atau pearl ini digandrungi anak-anak hingga dewasa.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right: 5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/drk 6.jpg" alt="Avatar" class="image">
                            <div class="overlay2">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">coffe hot</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. komoditas yang dibudidayakan lebih dari 50 negara.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/drk 7.jpeg" alt="Avatar" class="image">
                            <div class="overlay2">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Green Tea Latte</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Green teaadalah minuman paling sehat yang kaya akan antioksidan dan nutrisi. Selain itu rasa yang bikin ketagihan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/drk 8.jpg" alt="Avatar" class="image">
                            <div class="overlay2">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Milkshake Float</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Minuman kekinian yang digemari orang karena bukan hanya asik sebagai teman ngobrol, melainkan juga bisa jadi bahan untuk post di Instagram.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>
    </tr>
    </table>
    </div>
    </div>
    </section>
    <!--akhir drink -->

    <!-- awal disert -->
    <div class="container-custome shop-page best-kopi" id="best-kopi">
        <div class="cof-header">
            <div class="box-title">
                <div class="box-title-content">
                    <p style="font-size: 28px; font-weight: bold;" class="section-title">All About Dessert </p>
                </div>
            </div>
            <section class="menu-dessert" style="margin-top:-40px;">
                <table>
                    <tr>
                        <td>
                            <div class="list-product">
                                <div class="container-fluid" style="margin-left:-20px; margin-right:5px;">
                                    <div class="row" style="padding-bottom:-1000px;">
                                        <div class="col">
                                            <div class="card">
                                                <img src="img/disert 1.jpg" alt="Avatar" class="image">
                                                <div class="overlay3">
                                                    <div class="text">
                                                        <p class="tx">Cupcake Chocolate</p>
                                                        <hr>
                                                        <p class="txb">Tipe dessert kue memiliki ciri khas tekstur yang empuk dan merupakan jenis roti bercita rasa manis.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
        </td>

        <td>
            <div class="list-product">
                <div class="container-fluid" style="margin-right: 5px;">
                    <div class="row" style="padding-bottom:-1000px;">
                        <div class="col">
                            <div class="card">
                                <img src="img/disert 2.jpg" alt="Avatar" class="image">
                                <div class="overlay3">
                                    <div class="text">
                                        <p style="font-size:15px; text-align:center">Cake Dessert Food</p>
                                        <hr>
                                        <p style="font-size:10px; text-align:center;">Cake adalah salah satu jenis makanan yang disajikan sebagai dessert namun harus diperhatikan porsi dan cara penyajiannya. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/disert 3.jpg" alt="Avatar" class="image">
                            <div class="overlay3">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Baked Egg Custard</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Custard telur panggang pencuci mulut menit terakhir yang ideal,dibuat dengan taburan klasik pala parut, menambahkan sedikit warna dan sedikit bumbu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/disert 4.jpg" alt="Avatar" class="image">
                            <div class="overlay3">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Ice Cream Sandwich</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Kue sandwich es krim yang sangat sederhana. Musim panas ditemani Makanan penutup musim panas akan lebih sempurna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>
    </tr>
    </table>
    <!-- disert baris ke 2 -->
    <div class="disert2">
        <table>
            <tr>
                <td>
                    <div class="list-product">
                        <div class="container-fluid" style="margin-left:-20px; margin-right:5px;">
                            <div class="row" style="padding-bottom:-1000px;">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/disert 5.jpg" alt="Avatar" class="image">
                                        <div class="overlay4">
                                            <div class="text">
                                                <p class="tx">Cranberry-pear Pie</p>
                                                <hr>
                                                <p class="txb">Pie adalah salah satu jenis pastry yang berupa adonan biskuit. Dengan tekstur lembut dan rasa yang manis dan lezat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right: 5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/disert 6.jpg" alt="Avatar" class="image">
                            <div class="overlay4">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Permen Caramel</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Cokelat dan permen dibuat melalui tahap kristalisasi gula. Dessert yang masuk ke dalam tipe cokelat dan permen antara lain seperti karamel,lolipop.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/disert 7.jpg" alt="Avatar" class="image">
                            <div class="overlay4">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Chocolate Lava Cake</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Kue ini terbilang sangat unik karena dalam kue ini terdapat magma coklat yang sangat lembut dan manis sehingga sangat cocok untuk dicoba.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/disert 8.jpg" alt="Avatar" class="image">
                            <div class="overlay4">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Vanilla Cream Puff</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Pastry berasal campuran terigu, cairan, dan lemak yang tinggi. Dengan demikian, pastry mempunyai tekstur yang renyah dan berlipat-lipat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>
    </tr>
    </table>
    </div>
    </div>
    </section>
    <!-- akhir disert -->

    <!-- awal snack -->
    <div class="container-custome shop-page best-kopi" id="best-kopi">
        <div class="cof-header">
            <div class="box-title">
                <div class="box-title-content">
                    <p style="font-size: 28px; font-weight: bold;" class="section-title">All About Snack </p>
                </div>
            </div>
            <section class="menu-snack" style="margin-top:-40px;">
                <table>
                    <tr>
                        <td>
                            <div class="list-product">
                                <div class="container-fluid" style="margin-left:-20px; margin-right:5px;">
                                    <div class="row" style="padding-bottom:-1000px;">
                                        <div class="col">
                                            <div class="card">
                                                <img src="img/cmln1.png" alt="Avatar" class="image">
                                                <div class="overlay5">
                                                    <div class="text">
                                                        <p class="tx">Batagor</p>
                                                        <hr>
                                                        <p class="txb">Batagor sendiri adalah kudapan bakso tahu goreng dengan saus kacang yang gurih,lezat dan pastinya menggugah selera.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
        </td>

        <td>
            <div class="list-product">
                <div class="container-fluid" style="margin-right: 5px;">
                    <div class="row" style="padding-bottom:-1000px;">
                        <div class="col">
                            <div class="card">
                                <img src="img/cemilan2.jpg" alt="Avatar" class="image">
                                <div class="overlay5">
                                    <div class="text">
                                        <p style="font-size:15px; text-align:center">Siomay</p>
                                        <hr>
                                        <p style="font-size:10px; text-align:center;">Makanan ini identik dengan bumbu kacang dan rasa gurih ikan tenggiri.Menu tambahannya itu mulai dari kentang, kol, pare, tahu, hingga telur ayam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/tahug.jpg" alt="Avatar" class="image">
                            <div class="overlay5">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Tahu Gejrot</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">kuliner khas Cirebon tahu gejrot.Tahu gejrot terdiri dari tahu goreng kopong yang dipotong-potong, kemudian disiram oleh rebusan air gula merah dan kecap.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/cemilan4.jpg" alt="Avatar" class="image">
                            <div class="overlay5">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Cilok</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Cilok adalah makanan yang amat sederhana,berbentuk bulat kecil-kecil dan terbuat dari tepung tapioka sehingga teksturnya kenyal-kenyal menggemaskan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>
    </tr>
    </table>
    <!-- snack baris ke 2 -->
    <div class="snack2">
        <table>
            <tr>
                <td>
                    <div class="list-product">
                        <div class="container-fluid" style="margin-left:-20px; margin-right:5px;">
                            <div class="row" style="padding-bottom:-1000px;">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/bacil.jpg" alt="Avatar" class="image">
                                        <div class="overlay5">
                                            <div class="text">
                                                <p class="tx">Bacil</p>
                                                <hr>
                                                <p class="txb">Bacil adalah salah satu sebutan makanan yang dijajakan. Arti dari Bacil adalah batagor cilok.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right: 5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/cemilan6.jpg" alt="Avatar" class="image">
                            <div class="overlay5">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Telur Gulung</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Telur gulung adalah variasi dari telur goreng, kemudian di gulung menggunakan tusukan sate biasanya makanan ini banyak kita jumpai di depan sekolah dasar.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/cemilan7.jpg" alt="Avatar" class="image">
                            <div class="overlay5">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Sosis Bakar</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Sosis adalah suatu makanan yang terbuat dari daging cincang, lemak hewan, ternak dan rempah, serta bahan-bahan lain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>

    <td>
        <div class="list-product">
            <div class="container-fluid" style="margin-right:5px;">
                <div class="row" style="padding-bottom:-1000px;">
                    <div class="col">
                        <div class="card">
                            <img src="img/cemilan3.jpg" alt="Avatar" class="image">
                            <div class="overlay5">
                                <div class="text">
                                    <p style="font-size:15px; text-align:center">Dimsum Ayam</p>
                                    <hr>
                                    <p style="font-size:10px; text-align:center;">Dim sum yang dalam bahasa Mandarin berarti menyentuh hati adalah hidangan yang terdiri dari beberapa jenis makanan yang berukuran kecil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </td>
    </tr>
    </table>
    </div>
    </div>
    </section>
    <!-- akhir cemilan -->
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- <script src="./js/bootstrap.min.js"></script> -->

    <!-- <script>
    //paralax menu makanan
    if( wScroll > 100 ) {
        console.log('ok'); 
    } 
    </script> -->
</body>

</html>