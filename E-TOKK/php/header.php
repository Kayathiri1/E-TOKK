<meta charset="utf-8">

<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/uCarousel.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document)
    .ready(function () {
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <h2 class="p2">E-TOKK<br>Technical College</a></h2>
    
    <nav>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-1.jpg" alt=""></li>
            <li><img src="images/slider-2.jpg" alt=""></li>
            <li><img src="images/slider-3.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <ul class="menu">
        <li class="current"><a href="index.php" class="clr-1">Home</a></li>
        <li><a href="about.php" class="clr-2">About</a></li>
        <li><a href="courses.php" class="clr-3">Courses</a></li>
        <li><a href="gallery.php" class="clr-4">Gallery</a></li>
        <li><a href="login.php" class="clr-5">Login</a></li>

      </ul>
    </nav>
  </header>
  <!--