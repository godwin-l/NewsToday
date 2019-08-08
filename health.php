<?php

error_reporting(0);
 $page = isset($_GET['page']) && $_GET['per-page'] <= 4 ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 5 ? (int)$_GET['per-page'] : 5;


$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$perPage = $start + $perPage;
$urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=health&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

    $urlSourcesArray = json_decode($urlSources,true);

$pages = 4;


?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>NewsToday — Health</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4803002634294024",
    enable_page_level_ads: true
  });
</script>
</head>
<body>

<?php
define('_MN_USER', 'e06c654e7a77b5c3cc5a770d6f64c5b1798538bf');
require_once($_SERVER['DOCUMENT_ROOT'].'/'._MN_USER.'/magenet.php');
$magenet = new Magenet(); 
 echo $magenet->getLinks(1); 
          ?>

<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="business.php">Business <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="sports.php">Sports <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="entertainment.php">Entertainment <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="health.php">Health <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="science.php">Science <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">24 Health</div>
                </div>
<?php
for ($i = $start ; $i < $perPage ; $i++) :
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10); ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Health</div>
                            <div style="background-image:url(images/logo.png);" class="fh5co_news_img"><img src="<?php echo $articlesName['urlToImage'] ?>" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="<?php echo $articlesName['url']; ?>" class="fh5co_magna py-2"><?php echo $articlesName['title']; ?></a>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;<?php echo substr($articlesName['publishedAt'], 0, 10) ?></div> 
                        <div class="fh5co_mini_time py-3"><?php echo $articlesName['source']['name']; ?> </div>
                        <div class="fh5co_consectetur"><?php echo $articlesName['description'];?></div>
                    </div>
                </div>
<?php endfor; ?>
                    </div>

                    <?php
define('_MN_USER', 'e06c654e7a77b5c3cc5a770d6f64c5b1798538bf');
require_once($_SERVER['DOCUMENT_ROOT'].'/'._MN_USER.'/magenet.php');
$magenet = new Magenet(); 
 echo $magenet->getLinks(1); 
          ?>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
        <?php for($x = 1; $x <= 4; $x++): ?>
    <li class="page-item, page-link"><a href="?page=<?php echo $x; ?>"<?php if($page === $x) {echo 'class="selected"';} ?>><?php echo $x; ?></a></li><?php endfor; ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>



<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>