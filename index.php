<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script type="text/javascript" src="../js/scroll.js"></script>
    <script type="text/javascript" src="../js/ScrollTrigger.min.js"></script>
</head>

<body>
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
    <!-- About -->
        <!-- <div id="about" class="aboutt">
        <div class="article">
            <h1 class="ah1">About</h1>
                <p class="p1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque quam cum distinctio, sunt dolor vitae accusamus, 
                nihil est cupiditate aliquid molestiae porro quis soluta perspiciatis, nisi enim voluptatibus velit officia.</p>
            <div class="btn-group">
                <button type="button" class="btn" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <img src="img/panah.png" class="panah">
                    Left-aligned but right aligned when large screen
                </button>
                <p class="dropdown-menu dropdown-menu-lg-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Adipisci velit sequi iste, dolorem labore distinctio quibusdam 
                    enim harum explicabo veniam, error amet aspernatur debitis libero. 
                    Cupiditate est ex eum! Magnam.</p>
            </div>
        </div>
    </div> -->
    <div id="container2" class="container2">
		<div id="scene" class="scene">
			<div data-depth="0.60"><img src="../img/roti.png" style="width:200px; height:200px;margin-top: 50px;"></div>
            <div class="article">
            <h1 class="ah1">About</h1>
                <p class="p1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque quam cum distinctio, sunt dolor vitae accusamus, 
                nihil est cupiditate aliquid molestiae porro quis soluta perspiciatis, nisi enim voluptatibus velit officia.</p>
            <div class="btn-group">
                <button type="button" class="btn" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <img src="img/panah.png" class="panah">
                    Left-aligned but right aligned when large screen
                </button>
                <p class="dropdown-menu dropdown-menu-lg-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Adipisci velit sequi iste, dolorem labore distinctio quibusdam 
                    enim harum explicabo veniam, error amet aspernatur debitis libero. 
                    Cupiditate est ex eum! Magnam.</p>
            </div>
        </div>
	</div>
<br/></br></br></br>

<!-- Footer -->
<footer class="footer-section spad">
<div class="footer-widget">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
                <table width="100%" class="table">
                    <tr>
                        <td>
                            <div class="label mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="label mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <button type="submit" class="button btn btn-primary mb-3">Send</button>
                            </div>
                        </td>
                        <td>
                        <h4>Female</h4>
                            <ul>
                                <li>Food</li>
                                <li>Drink</li>
                                <li>Dessert</li>
                                <li>Snacks</li>
                                <li>About</li>
                            </ul>
                        </td>
                        <td>
                            <h4>Product</h4>
                            <ul>
                                <li>Food</li>
                                <li>Drink</li>
                                <li>Dessert</li>
                                <li>Snacks</li>
                            </ul>
                        </td>
                        <td>
                            <h4>Help</h4>
                            <ul>
                                <li>About</li>
                                <li>Message</li>
                                <li>PAQ</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </td>
                        <td>
                            <div class="label1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.705236475695!2d107.13949661395117!3d-6.805666368453325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852e697990cef%3A0x2ddbb36bc8af404e!2sUniversitas%20Suryakancana!5e0!3m2!1sid!2sid!4v1615167700312!5m2!1sid!2sid" 
                            width="400" height="250" style="border:0; margin-left:80px;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

        <div class="site-footer">
            <p style="letter-spacing: 1px; color: black;">Copyright © 2021 Female Court. All Rights Reserved </p>
        </div>
</footer>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>
</body>

</html>