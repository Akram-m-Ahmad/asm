<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ASM-SY</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 
          <link href="{{ asset('/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
         <!-- Template Stylesheet -->
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">ASM-SY</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    <a href="#contact" class="nav-item nav-link">تواصل معنا</a>
                    <a href="#nathra" class="nav-item nav-link">نظرة عامة</a>

                    <a href="#project" class="nav-item nav-link">المشاريع والبرامج</a>

                    <a href="#blog" class="nav-item nav-link">مجالاتنا</a>

                    <a href="#entsab" class="nav-item nav-link">   الانتساب</a>

                    <a href="#team" class="nav-item nav-link">فريقنا</a>
                    <a href="#experience" class="nav-item nav-link">   نشاطاتنا</a>

                    <a href="#service" class="nav-item nav-link">من نحن</a>
                        <a href="#home" class="nav-item nav-link active">الرئيسية</a>
                       
                       
                        
                       
                      
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                              
                                <h2></h2>
                                <div class="typed-text">The only way to break the chains of injustice and walk the path of freedom                                </div>
                            </div>
                            <div class="hero-btn">
                                <a class="btn" href="">Hire Me</a>
                                <a class="btn" href="">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/1.jpeg" alt="Hero Image">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                     
                </div>
                <div class="row">
              

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    @foreach ($details as $reac)
                        <div class="service-item">
                             
                            <div class="service-text">
                                <h3> {{ $reac->title}}</h3>
                                <p>
                                {{ $reac->topic}}                                  </p>
                            </div>
                        </div>
                    </div>
             
            
                 
                    @endforeach
                </div>
              
            </div>
        </div>
        <!-- Service End -->
         <!-- Banner Start -->
         <div class="experience"  >
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                     <h2>
 ارقام واحصاءات</h2>
                </div>
                <div class="container banner-text">
                <div class="row">
                @foreach ($statistics   as $reac)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            
                            <div class="team-text tet">
                                <h2 class="tet"> {{ $reac->title}} </h2>
                                <h4 class="tet"> {{ $reac->count}} </h4>
                               
                                 
                            </div>
                        </div>
                    </div>
                    @endforeach

          
              
                </div>
                 </div>
            </div>
        </div>
</div> <br> <br><br> <br>
        
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p> نشاطات المنظمة </p>
                    <h2>  نشاطاتنا</h2>
                </header>
                <div class="timeline">
                @foreach ($activities as $reac)
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"> {{ $reac->date}} </div>
                            <h2> {{ $reac->name}}</h2>
                             <p>
                             {{ $reac->details}}                        </div>
                    </div>
                     
                    @endforeach
                    </div>
                   
                   
                </div>
            </div>
        </div>
        <!-- Job Experience End -->
          <!-- Team Start -->
          <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>فريقنا</p>
                    <h2>    فريق عمل المنظمة</h2>
                </div>
                <div class="row">
                @foreach ($teams as $reac)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('storage/images/teams/' .  $reac->image) }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2> {{ $reac->name}} </h2>
                                <h4> {{ $reac->title}} </h4>
                                <p>
                                {{ $reac->details}} 
                                 </p>
                                 <div class="footer-social">
                             <a href=" {{ $reac->f_link }} "style="color:blue"> <i class="fab fa-facebook-f" style="color:blue;font-size:25px"></i></a>
                          </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

          
              
                </div>
            </div>
        </div><br><br><br>
        <!-- Team End -->
        
        <!-- Banner Start -->
        <div class="experience" id="entsab">
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                     <h2>
طلب الانتساب من الناجين وذوي المعتقلين والمساندين</h2>
                </div>
                <div class="container banner-text">
                    
                     <a href="https://docs.google.com/forms/d/1keL7_TvOzp5PQcxfCuQ1CwJoI9X8MvXz9PMMCVjG1NM/viewform?edit_requested=true" class="btn btn-green">طلب الانتساب</a>
                </div>
            </div>
        </div>
</div> <br> <br><br> <br>
        <!-- Banner End -->


       
        
        
    
      

      
          <!-- domain Start -->
          <div class="team" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>مجالاتنا</p>
                    <h2>     مجالات عمل المنظمة</h2>
                </div>
                <div class="row">
                @foreach ($domains   as $reac)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            
                            <div class="team-text">
                                <h2> {{ $reac->name}} </h2>
                                <h4> {{ $reac->title}} </h4>
                                <p>
                                {{ $reac->details}} 
                                 </p>
                                 
                            </div>
                        </div>
                    </div>
                    @endforeach

          
              
                </div>
            </div>
        </div><br> <br><br> <br><br> <br><br> <br><br> <br>
        <!-- Team domain -->
        

  
        <!-- Experience Start -->
        <div class="experience" id="project">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>  مشاريع و برامج </p>
                    <h2>  المشاريع والبرامج</h2>
                </header>
                <div class="w3-bar w3-black section-header text-center wow zoomIn" >
  <button class="w3-bar-item w3-button btn btn-green" onclick="openCity('London')">مشاريع سابقة</button>
  <button class="w3-bar-item w3-button btn btn-green" onclick="openCity('Paris')">مشاريع تحت التنفيذ</button>
 </div>

<div id="London" class="w3-container city   text-center    ">
<div class="card-body">
                <div class="table-responsive text-left">
                    <table class="table">
                      
                        <tbody>


                            @foreach ($pre_projects as $pre_projects)
                                <tr>
                                <td><img src="{{ asset('storage/images/pre_projects/' . $pre_projects->image) }}" width="200px">
                                    </td>
                                   
                                    <td>{{ $pre_projects->details }}</td>
                                    <td><B>{{$pre_projects->title }}</B></td>
                                 
                                  

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
 
            </div>
 </div>

<div id="Paris" class="w3-container city  text-center  " style="display:none">
 
                <div class="card-body">
                <div class="table-responsive text-right">
                    <table class="table">
                      
                        <tbody>


                            @foreach ($under_projects as $pre_projects)
                                <tr>
                                <td><img src="{{ asset('storage/images/under_projects/' . $pre_projects->image) }}" width="200px">
                                    </td>
                                   
                                    <td>{{ $pre_projects->details }}</td>
                                    <td><B>{{$pre_projects->title }}</B></td>
                                 
                                  

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
</div>
            </div>
    </div>
            </div>
        </div><br> <br><br> <br><br> <br><br> <br><br> <br>
        
        <!-- Job Experience End -->
        


        <div class="experience"  >
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                     <h2>
                     فيديو تعريفي عن المنظمة</h2>
                </div>
                <div class="container banner-text">
                <div class="row">
               
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            
                            <div class="team-text tet">
                                <!-- <h2 class="tet"> {{ $reac->title}} </h2>
                                <h4 class="tet"> {{ $reac->details}} </h4>
                                <td>
                                    <video width="320" height="240" controls>
      <source src="{{ asset('storage/images/medias/' . $reac->video) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
                                    </td> -->
                                    <div class="row">

                                    @foreach ($media  as $reac)

               <div class="col-md-6">
                   <div class="video-caption-main">
                        <!--Video caption #1-->
                        <div class="video-caption">
                            <div class="video-icon">
                                <i class="fa fa-video-camera"></i>
                            </div>
                            <div class="video-caption-info">
                            <h2 class="tet"> {{ $reac->title}} </h2>
                                <h4 class="tet"> {{ $reac->details}} </h4>
                            </div>
                        </div>

                         <!--Video caption #2-->
                       

                        <!--Video caption #3-->
                       
                   </div>
               </div>
              <!-- End Video caption-->


              <div class="col-md-6">
                  <div class="play-video">
                  <video width="325" height="325" controls>
      <source src="{{ asset('storage/images/medias/' . $reac->video) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>              </div>
              @endforeach
             </div>
                                 
                            </div>
                        </div>
                    </div>
                

          
              
                </div>
                 </div>
            </div>
        </div>
</div> <br> <br><br> <br>
 
<div class="teamsw" id="nathra">
            <div class="container">
                <div class="section-header text-center  " data-wow-delay="0.1s">
                    <p>نظرة عامة</p>
                    <h2>     نظرة عامة </h2>
                </div>
                <div class="row">
              
                    <div class="col-lg-6    " data-wow-delay="0.0s">
                        <div class="team-item">
                            
                            <div class="team-text">
                            <h2> هيكلية المنظمة </h2>
                            <div class="row">
                            @foreach ($about_str as $rec)
              <div class="col-lg-12  " data-wow-delay="0.0s">
              <table    >
                      
                      <tbody>


                       
                              <tr>
                              
                                 
                                  <td> <B> {{ $rec->title}}</B></td>
                                  <td>{{ $rec->details}}</td>
                               
                                

                              </tr>
                       
                      </tbody>
             
</table>
 
                                

 
              </div>
              @endforeach
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            
                            <div class="team-text">
                                 dddddd
                                 
                            </div>
                        </div>
                    </div>

          
              
                </div>
            </div>
        </div><br> <br><br> <br><br> <br><br> <br><br> <br>


        <!-- Contact Start -->
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


     
        <!-- Footer Start -->
         
     
         
       
         <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>ASM-SY
                        </h2>
                        @foreach ($contacts as $rec)
                        <h3>  {{ $rec->address }} </h3>
                        <div class="footer-menu">
                            
                            <p> {{ $rec->email }} 

                            </p>
                        </div>
                        <div class="footer-menu">
                        <i class="fa fa-phone"></i>
                            <p> {{ $rec->phone }} 

                            </p>
                        </div>
                        
                        <div class="footer-social">
                            <a href=" {{ $rec->t_link }} "><i class="fab fa-twitter"></i></a>
                            <a href=" {{ $rec->f_link }} "><i class="fab fa-facebook-f"></i></a>
                            <a href=" {{ $rec->y_link }} "><i class="fab fa-youtube"></i></a>
                            <a href=" {{ $rec->i_link }} "><i class="fab fa-instagram"></i></a>
                         </div>
                    </div>
                    @endforeach

                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">ASM-SY
                    </a>, All Right Reserved | Designed By <a href=" ">Akram</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
         <script src=" {{ asset('/lib/easing/easing.min.js') }}"></script>
        <script src=" {{ asset('/lib/wow/wow.min.js') }}"></script>
        <script src=" {{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
        <script src=" {{ asset('/lib/typed/typed.min.js') }}"></script>
        <script src=" {{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src=" {{ asset('/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src=" {{ asset('/lib/lightbox/js/lightbox.min.js') }}"></script>
        
        <!-- Contact Javascript File -->
        <script src=" {{ asset('/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src=" {{ asset('/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src=" {{ asset('/js/main.js') }}"></script>
    </body>
</html>
