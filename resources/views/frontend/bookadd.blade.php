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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                            <a href="{{route('signin')}}"style="color:white;font-size:16px;" >
                                Login</a> <span style="color:white;">/</span>
                                <span><a href="{{route('registration')}}" style="color:white;font-size:16px;" >Register</a></span>
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

                                <aside class=" sidebar sidebar-fixed sticky-sidebar-wrapper">

                                    <div class="sidebar-overlay">
                                        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                                    </div>
                                    <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                                    <div class="sidebar-content">
                                    </div>
                                </aside>

                                <a href="{{route('bookadd')}}"><button type="button" class="btn btn-success btn-sm" style="margin-bottom:15px;">Book Add</button></a>





                             



                                {{-- filter section --}}

                            </div>

                        

                         
                        <div class="col-md-7 scrollbar">

                            <div class="">

     
                        {{-- end banner --}}


                      

                        <section class="product-wrapper" style="margin-top: 15px;margin-bottom:25px;">
                            <form>
                                <div class="form-group">
                                    <label for="inputState" style="font-weight: bold;color: black;">Type</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>Academic</option>
                                      <option>Novel</option>

                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputState" style="font-weight: bold;color: black;">Price</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>Fixed</option>
                                      <option>Negotiable</option>

                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputState" style="font-weight: bold;color: black;">Condition</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>Old</option>
                                      <option>New</option>

                                    </select>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group">
                                      <label for="inputEmail4" style="font-weight: bold;color: black;">Book Name</label>
                                      <input type="text" class="form-control" id="inputEmail4" placeholder="Book Name">
                                    </div>
                                    <div class="form-group ">
                                      <label for="inputPassword4" style="font-weight: bold;color: black;">Writer Name</label>
                                      <input type="text" class="form-control" id="inputPassword4" placeholder="Writer Name">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group">
                                      <label for="inputEmail4" style="font-weight: bold;color: black;">Publisher Name</label>
                                      <input type="text" class="form-control" id="inputEmail4" placeholder="Publisher Name">
                                    </div>
                                    <div class="form-group ">
                                      <label for="inputPassword4" style="font-weight: bold;color: black;">Publisher Year</label>
                                      <input type="text" class="form-control" id="inputPassword4" placeholder="Publisher Year">
                                    </div>
                                  </div>

                                
                             
                               

                          
                                  <div class="form-group">
                                    <label for="inputEmail4" style="font-weight: bold;color: black;">Description</label>
                                    
                                    
                                    
                                    <textarea type="text" class="form-control" row="10" col="50"></textarea>
                                    
                        
                                    
                                  </div>
                                
                                <div class="form-group">
                                  <label for="inputAddress" style="font-weight: bold;color: black;">Address</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress" style="font-weight: bold;color: black;">Photo</label>
                                    <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                  </div>
                              

                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           
                    </section>

                        </div>
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