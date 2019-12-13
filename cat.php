<?php
require_once ("connection.php");
mysqli_set_charset($conn,'utf8');
 if($_GET['c']==1)
$sql="select * from v1";
 if($_GET['c']==3)
$sql="select * from v2";
 if($_GET['c']==2)
$sql="select * from v3";

$result=mysqli_query($conn,$sql);



?>
<html>
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TVW2Q94');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta property="og:url"           content="https://www.dailydunyaonline.com/index.php" />
    <meta property="og:type"          content="News" />
    <meta property="og:title"         content="Daily Dunya Online" />
    <meta property="og:description"   content="Urdu News" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />


    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notonastaliqurdudraft.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        *{
            direction: rtl;

            font-size: 20px;
            text-align: right;

        }
        nav div ul li:hover{
            border-bottom: 2px solid #192199;
        }

        .bg1 {
            background-image: url("c1.jpg"); /* The image used */
            background-color: #cccccc; /* Used if the image is unavailable */
            height: 300px; /* You must set a specified height */
            /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
        }



    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVW2Q94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-dark  navbar-expand-lg sticky-top bg-dark" >
    <a class="navbar-brand" href="index.php">Daily Dunya Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="cat.php?c=1">تازہ ترین</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cat.php?c=3">کھیل</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#3"> ویڈیوز</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    کالمز
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Afzal Iftikhar</a>
                    <a class="dropdown-item" href="#">Imran</a>
                    <a class="dropdown-item" href="cat.php?c=2">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid bg1"  >
    <div class="container" >
        <h1>ڈیلی دنیا آن لائن</h1>

    </div>
</div>
<div class="container-fluid">

    <div class="row">

        <div class="col-sm-12 col-md-8  bg-light">
            <h2 class="w-100">Name</h2>
            <?php while ($data=mysqli_fetch_array($result)){ ?>
                <a href="detail.php?n=<?php echo $data['id'];?>" class="card-link text-info">
            <div class="media border  p-3">
                <img src="<?php echo $data['path']; ?>" alt="John Doe" class="img-fluid" style="width:120px;">
                <div class="media-body mr-3">
                    <h4><?php echo $data['title']; ?></h4>

                </div>
            </div> </a>
            <?php } ?>
        </div>
        <div class="col-sm-12 col-md-4 bg-light">
            <h2 class="w-100">Ctegories</h2>
            <div class="list-group">
                <a href="cat.php?c=1" class="list-group-item list-group-item-action">تازہ ترین</a>
                <a href="cat.php?c=3" class="list-group-item list-group-item-action">کھیل</a>
                <a href="cat.php?c=2" class="list-group-item list-group-item-action">کالمز</a>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid bg-dark p-5" >
    <div class="row" data-aos="fade-up"
         data-aos-anchor-placement="center-bottom">

        <div class="col " ><ul style="list-style-type:none;color: gray">
                <h5 >Customer Service</h5>
                <li>FAQ</li>
                <li>Return Policy</li>
                <li>Guarentee</li>
                <li>Store Locator</li>

            </ul> </div>
        <div class="col " ><ul style="list-style-type:none;color: gray">
                <h5 >Programs</h5>
                <li>Coffee</li>
                <li>Tea</li>
                <li>Milk</li>
            </ul> </div>
        <div class="col " ><ul style="list-style-type:none;color: gray">
                <h5 >Helpful links</h5>
                <li>Contact us</li>
                <li>Discounts</li>
                <li>Gift Cards</li>

            </ul> </div>
        <div class="col " ><ul style="list-style-type:none;color: gray">
                <h5 >Call or text us today!</h5>
                <li>+923#########</li>
                <li>abc@example.com</li>
                <li>Building no # , Lahore, Pakistan</li>
                <li style="color: #ff7025"><i style="font-size: 48px" class="fab fa-facebook"></i><i style="font-size: 48px" class="fab fa-snapchat-square"></i><i style="font-size: 48px" class="fab fa-instagram"></i></li>
            </ul> </div>

    </div>
    <label class="text-white">Ⓒ 2018 <a href="#" style="color: #ff7025">Dailydunyaonline.com</a> <a>Terms & Conditions</a> | <a>Privacy Policy</a></label>
    <br><br>
</div>

<script>AOS.init();</script>
</body>
</html>