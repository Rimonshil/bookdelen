<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Bookdelen- demo</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function(){
          $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
        });
        </script>

        <style>
            @media screen and (max-width: 768px) {

#content-mobile {display: none;}

}
        </style>

    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/demo18.min.css">
</head>

<body class="home" style="background-color: rgb(231, 237, 238)">

    <div class="page-wrapper">
        <h1 class="d-none">Bookdelen- demo</h1>
        <header class="header">
            <div class="header-middle has-center sticky-header fix-top sticky-content" style="height: 50px;">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="{{URL::to('/')}}" class="logo mr-0">
                            <img src="images/logo1.png" alt="logo" style="width: 35px;height:35px;" />

                        </a>
                        <a href="{{URL::to('/')}}" class="logo mr-0" style="margin-left: 1px;">
                            <img src="images/logo2.png" alt="logo" style="width: 120px;height:35px;" />

                        </a>
                       
                      
                        <!-- End DropDown Menu -->
                    </div>
                    <div class="header-center">
                        <!-- End Logo -->
                    </div>
                    <div class="header-right">
                   
                        <div class="header-search hs-simple pull-right">
                            <form action="#" method="get" class="input-wrapper" style="width: 300px; margin-left:250px;">
                                <input type="text" class="form-control" name="search" id="search" placeholder="Search..." required="">
                                <button class="btn btn-search" type="submit"><i class="d-icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Header Middle -->
        </header>

        <div class="sticky-content-wrapper" style="height: 54px; "><div class="header-bottom fix-top sticky-content" style="background-color:#202040 ">
            <div class="container d-block">
                <nav class="main-nav d-flex justify-content-between ml-0" >
                    <ul class="menu" style="color:white;">
                        <li class="active" >
                            <a href="{{URL::to('/')}}"  style="color:white;">Home</a>
                        </li>
                        <li >
                            <a href="about-us.html"  style="color:white;">About Us</a>
                        </li>
                        <li>
                            <a href="about-us.html"  style="color:white;">Profile</a>
                        </li>
                        <li>
                            <a href="about-us.html"  style="color:white;">Message</a>
                        </li>
                     
                
                    </ul>
                    <ul class="menu">
                        <li>
                            <a href="{{route('signin')}}" style="color:white;" >
                                Login</a> <span style="color:white;">/</span>
                                <span><a href="{{route('registration')}}" style="color:white;" >Register</a></span>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div></div>







        <!-- End Header -->
        <main class="main" style="margin-top:40px;">
            <div class="page-content" >
                <div class="container" style="background-color: white;">
                    <div class="row">
                    <div class="col-md-12" style="margin-top:30px;">

                        <div class="col-md-3">
                        
                            


                        <aside class=" sidebar sidebar-fixed sticky-sidebar-wrapper" >
                            
                            <div class="sidebar-overlay">
                                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            </div>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                            <div class="sidebar-content">
                                <div class="dropdown" style="margin-bottom:20px;">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Filter
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">Type of book <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                              <li><a tabindex="-1" href="#">Write</a></li>
                                              <li><a tabindex="-1" href="#">Price</a></li>
                                              <li><a tabindex="-1" href="#">Location</a></li>
                                              <li><a tabindex="-1" href="#">Free</a></li>
        
                                              <li class="dropdown-submenu">
                                                <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                  <li><a href="#">3rd level dropdown</a></li>
                                                  <li><a href="#">3rd level dropdown</a></li>
                                                </ul>
                                              </li>
                                            </ul>
                                          </li>                                 
                                      <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">Institution <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a tabindex="-1" href="#">Class</a></li>
                                          <li><a tabindex="-1" href="#">Year</a></li>
                                          <li><a tabindex="-1" href="#">Subject</a></li>
                                          <li><a tabindex="-1" href="#">Solution</a></li>
    
                                          <li class="dropdown-submenu">
                                            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                              <li><a href="#">3rd level dropdown</a></li>
                                              <li><a href="#">3rd level dropdown</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                <div class="sticky-sidebar" data-sticky-options="{'top': 0}">
                                    <div class="widget widget-category mb-8">
                                        
                                        <ul class="menu vertical-menu category-menu">
                                            <li>
                                                <a href="{{route('bookadd')}}"><i class="fas fa-book"></i>Book add</a>
                                            </li>
                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-book"></i>Novel</a>
                                            </li>
                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-book"></i>Academic</a>
                                            </li>
                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-book"></i>Professional</a>
                                            </li>
                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-book"></i>Story Writing</a>
                                            </li>
                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-book"></i>Poem writing</a>
                                            </li>
                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-book"></i>Free stuff</a>
                                            </li>
                      

                                            
                                           
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </aside>
                        </div>
                   
                        
