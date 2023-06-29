<?php //include('include/classes/database.php');  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PraediiKonsults.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images-s/favlogo3.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->

    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Carousel  main css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="assets/css/core.css?<?=time()?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="assets/css/shortcode/shortcodes.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/shortcode/header.css?v=<?php echo time(); ?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="assets/css/style.css?<?=time()?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- <link rel="stylesheet" href="assets/css/bt.css"> -->



    
    
    <style>
        .blog-image{
            height: 400px;
            width: 400px;
        }

        .client_list{
            display:flex;
            justify-content:center;
            align-items:center;
            
        }
        

        .serv-img{
            display: block;
          
             width: 400px;
             height: 250px;
             margin-top: 40px;

        }

        .search_units{
            display:flex;
            justify-content: space-around;
            align-items:center;
            margin-top:20px;
            flex-wrap:wrap;
        }

        .icon_units{
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:20px;
            flex-wrap:wrap;
        }

      
    </style>


    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/js/all.js"></script>
    <script defer src="assets/js/animate.js"></script>
</head>

<body>
   

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <div id="header" class="htc-header">
           
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header"   style="background-color: white;" >
                <div class="container">
                    <div class="row" style="padding:0 3px 0 3px;">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="logo" >
                                <a href="index.php">
                                    <img src="assets/images-s/favlogo3.png" alt="logo image" height="50" width="100">
                                </a>
                            </div>
                            
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-5">
                            <nav class="main__menu__nav  hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.php">HOME</a></li>
                                    <li><a href="about.php">ABOUT</a></li>
                                    <li><a href="service.php">SERVICES</a></li>
                                    <li><a href="property.php">PROPERTY</a></li>
                                    <li><a href="contact.php">CONTACT</a></li>
                                    <li><a href="faqs.php">FAQS</a></li>
                                    <li><a href="blog.php">BLOG</a></li>
                                </ul>
                                
                            </nav>
                            
                            <div class="mobile-menu clearfix visible-xs visible-sm" >
                                <nav id="mobile_dropdown" >
                                    <ul>
                                        <li class="drop"><a href="index.php">HOME</a></li>
                                        <li><a href="about.php">ABOUT</a></li>
                                        <li><a href="service.php">SERVICES</a></li>
                                        <li><a href="property.php">PROPERTY</a></li>
                                        <li><a href="contact.php">CONTACT</a></li>
                                        <li><a href="faqs.php">FAQS</a></li> 
                                        <!-- <li><a href="coming-soon.php">COMING SOON</a></li> -->
                                        <li><a href="blog.php">BLOG</a></li>
                                    </ul>
                                </nav>
                               
                            </div> 
                            
                        </div>
                        <div class="col-md-2 col-sm-6 hidden-xs">
                            <div class="htc__header__search">
                                <i class="fas fa-phone" style="color: #00000; "></i>
                                <a href="contact.php"><p style="color: black; margin-left:20px;"> CALL NOW</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
               
            </div>
            <!-- End Mainmenu Area -->
            
           
        </div>
        <!-- End Header Style -->