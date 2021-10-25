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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

.scrollbar{
    height: 100vh; 
    overflow-y: scroll;
}

.scrollbar::-webkit-scrollbar {
    display: none;
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

        <div class="sticky-content-wrapper"><div class="header-bottom fix-top sticky-content" style="background-color:#800080; height:40px;">
            <div class="container d-block">
                <nav class="main-nav d-flex justify-content-between ml-0" >
                    <ul class="menu" style="color:white;">
                        <li class="active" >
                            <a href="{{URL::to('/')}}"  style="color:white;font-size:16px;">Dashboard</a>
                        </li>
                        <li >
                            <a href="about-us.html"  style="color:white;font-size:16px;">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('bookcorner')}}"  style="color:white;font-size:16px;">Book Corner</a>
                        </li>
                        <li>
                            <a href="{{route('studenthub')}}"  style="color:white;font-size:16px;">Student Hub</a>
                        </li>
                     
                
                    </ul>
                    <ul class="menu">
                        <li>
                        @if(auth()->user())
                            <a href="{{route('signin')}}"style="color:white;font-size:16px;" >
                           {{ auth()->user()->name}}</a> 
                           <span><a href="{{route('logout')}}" style="color:white;font-size:16px;" >Logout</a></span>

                            @else
                            <span><a href="{{route('signin')}}" style="color:white;font-size:16px;" >Login</a></span>
                            <span><a href="{{route('registration')}}" style="color:white;font-size:16px;" >Register</a></span>

                       @endif
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div></div>







        <!-- End Header -->
        <main class="main" style="margin-top:15px;">
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
                                

                                  
                                 <div class="sticky-sidebar" data-sticky-options="{'top': 0}">
                                    <div class="widget widget-category mb-8">
                                        
                                        <ul class="menu vertical-menu category-menu">
                                            <li>
                                                <a href="{{route('bookcorner')}}"><i class="fas fa-book"></i>Book Corner</a>
                                            </li>

                                            <li>
                                                <a href="demo-kid-shop.html"><i class="fas fa-university"></i>Student Corner</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                   
                                </div> 
                            </div>
                        </aside>

                        {{-- filter section --}}
		
                        <div class="" style="margin-top: 24px;">
    
                            <div class="">
                       
                            </div>
                            </div>
                        </div>
                   
                        

                         
                        <div class="col-md-7 scrollbar">


                                <section>
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                          <li data-target="#myCarousel" data-slide-to="1"></li>
                                          <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>
                                    
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                          <div class="item active">
                                            <img src="images/banner.jpg" alt="Los Angeles" style="width:100%; height:300px;">
                                          </div>
                                    
                                          <div class="item">
                                            <img src="images/banner.jpg" alt="Chicago" style="width:100%; height:300px;">
                                          </div>
                                        
                                          <div class="item">
                                            <img src="images/banner.jpg" alt="New york" style="width:100%; height:300px;">
                                          </div>
                                        </div>
                                    
                                      </div>
                               
                            </section>

                            {{-- end banner --}}

                          

                            <section class="product-wrapper" style="margin-top: 15px;">
                                <div class="">

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="" data-testid="ad-card-link" title="" >
                                        <div class="container--2uFyv" >
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="" data-testid="ad-card-link" title="" >
                                        <div class="container--2uFyv" >
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="" data-testid="ad-card-link" title="" >
                                        <div class="container--2uFyv" >
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="" data-testid="ad-card-link" title="" >
                                        <div class="container--2uFyv" >
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="/en/ad/xiaomi-redmi-used-for-sale-dhaka-1929" data-testid="ad-card-link" title="">
                                        <div class="container--2uFyv">
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="/en/ad/xiaomi-redmi-used-for-sale-dhaka-1929" data-testid="ad-card-link" title="">
                                        <div class="container--2uFyv">
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="/en/ad/xiaomi-redmi-used-for-sale-dhaka-1929" data-testid="ad-card-link" title="Xiaomi Redmi phone (Used) for sale">
                                        <div class="container--2uFyv">
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="/en/ad/xiaomi-redmi-used-for-sale-dhaka-1929" data-testid="ad-card-link" title="Xiaomi Redmi phone (Used) for sale">
                                        <div class="container--2uFyv">
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>

                                    <li class="top-ads-container--1Jeoq gtm-top-ad" style="width:100%;"><a class="card-link--3ssYv gtm-ad-item" href="/en/ad/xiaomi-redmi-used-for-sale-dhaka-1929" data-testid="ad-card-link" title="Xiaomi Redmi phone (Used) for sale">
                                        <div class="container--2uFyv">
                                            <div class="image--2hizm"><img class="top-ad--22_qK" src="images/book/sample.jpg" alt="Xiaomi Redmi phone (Used)" data-testid="" loading="lazy"></div>
                                            <div class="content--3JNQz" data-testid="ad-meta">
                                                <h2 class="heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow">To kil the man</h2>
                                                <div>
                                                    <div></div>
                                                  
                                                    <div class="price--3SnqI color--t0tGX"><span>Charlei</span><span class="spacer--904y9"></span></div>
                                                </div>
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae expedita reiciendis, fugit reprehenderit enim blanditiis nam laboriosam tenetur</p>
                                            </div>
                                        </div>
                                    </a></li>
                                  
                                </div>
                               
                        </section>

                        </div>


                        <div class="col-md-2" id="content-mobile">
                            <div class="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis debitis optio dolorum nihil commodi quasi distinctio, eligendi reprehenderit. Quos distinctio repellendus iure non iusto asperiores nihil placeat dolor blanditiis nobis?</p>
                            </div>
                           
                        </div>

                           
                    </div>

                    </div>





                          
                        
                        </div>
                    </div>
              
                </div>
            </div>
            </div>
        </main>
        <!-- End Main -->
        <footer class="footer">
            <div class="container">
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                       
                    </div>
                    <div class="footer-center">
                        <p class="copyright">Bookdelen &copy; 2021. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo18.html" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="demo18-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="{{route('welcome')}}">Dashboard</a>
                </li>
                <li>
                    <a href="">About Us</a>
                </li>
                <li>
                    <a href="{{route('bookcorner')}}">Book Corner</a>
                </li>
                <li>
                    <a href="{{route('studenthub')}}">Student Hub</a>
                </li>
           
            </ul>
        </div>
    </div>

   
    
    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/sticky/sticky.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>


</html>