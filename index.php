<?php
require_once ("connection.php");
mysqli_set_charset($conn,'utf8');
$sql="select * from v1";
$result=mysqli_query($conn,$sql);
$sql2="select * from v2";
$result2=mysqli_query($conn,$sql2);
$sql3="select * from v3";
$result3=mysqli_query($conn,$sql3);
$sql4="select * from v4";
$result4=mysqli_query($conn,$sql4);


?>
<?php
require 'simple_html_dom.php';

$html = file_get_html('https://www.bbc.com/urdu/');
$title = $html->find('span [class="title-link__title-text"]', 0);
$image = $html->find('img', 0);

echo $title->plaintext."<br>\n";
echo $image->src;
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140387011-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-140387011-1');
    </script>


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

       nav a{
            color: white;
        }



    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVW2Q94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<nav class="navbar  navbar-expand-lg sticky-top text-white" style="background-color: #000000">
    <a class="navbar-brand" href="#">Daily Dunya Online</a>
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
<img src="uploads/m2.jpg" class="img-fluid">
<div id="1"></div>
<h4  class="m-3" > تازہ ترین</h4>
<div  class="row mx-0">

    <div class="col-sm-12 col-md-6">

            <a href="detail.php?n=<?php echo $data['id'];?>" class="card-link">
                <div class="card mb-3">
                    <img class="card-img-top h-75" src="<?php echo $image->src ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title->plaintext ?></h5>


                    </div>
                </div>
            </a>



    </div>

    <div class="col-sm-12 col-md-6">
        <?php while ($data=mysqli_fetch_array($result)){  ?>
            <a href="detail.php?n=<?php echo $data['id'];?>" class="card-link">
                <div class="media border-bottom mb-2">
                    <img src="<?php echo $data['path']?>" class="align-self-center m-3 w-25" >
                    <div class="media-body">

                        <p class="m-2"><?php echo $data['title']?></p>
                    </div>
                </div>
            </a>

        <?php } ?>


    </div>

</div >
<h4 class="m-3 border-bottom p-3">کالمز</h4>
<div class="container">
    <div class="card-deck row">
        <?php while ($d3=mysqli_fetch_array($result3)) {?>

            <div class="col-sm-12 col-md-4 mt-1">
                <a href="detail.php?n=<?php echo $d3['id'];?>" class="card-link">
                <div class="card">
                    <img class="card-img-top " src="<?php echo $d3['path']?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $d3['title']?></h5>


                    </div>
                </div>
                </a>
            </div>

        <?php } ?>








    </div>
</div>
<div id="2"></div>
<div class="container-fluid bg-light">
    <h3 class=" m-3 border-bottom p-3" >کھیل</h3>
    <div class="row">
        <?php while ($d2=mysqli_fetch_array($result2)) {?>

            <div class="col-sm-12 col-md-4 w-100">
                <a href="detail.php?n=<?php echo $d2['id'];?>" class="card-link">
                <div class="media border-bottom mb-2">
                    <img src="<?php echo $d2['path']?>" class="align-self-center m-3" width="125px" height="125px" >
                    <div class="media-body">

                        <p class="m-2"><?php echo $d2['title']?></p>
                    </div>
                </div>
            </a>
            </div>

        <?php } ?>




    </div>
</div>
<div class="row m-0 " style="background: black">
    <h3 class="text-white m-3 border-bottom p-3 w-100" style="background-color: black">ویڈیوز</h3>
    <?php while ($d4=mysqli_fetch_array($result4)){?>
        <div class="col-12 col-sm-12 col-md-4">
            <div class="embed-responsive embed-responsive-4by3">
                <?php echo $d4['path']?>
            </div>

        </div>
    <?php }?>
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