@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<div id="page-wrapper">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
       <div class="container" >
          <!-- jumbo-heading -->
          <div class="jumbo-heading" data-aos="fade-down">
             <h1>About us</h1>
             <!-- Breadcrumbs -->
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
             </nav>
             <!-- /breadcrumb -->
          </div>
          <!-- /jumbo-heading -->
       </div>
       <!-- /container -->
    </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div class="page container">
       <div class="row">
          <!-- page with sidebar starts -->
          <div class="col-lg-9 page-with-sidebar">
             <div class="container">
                <!-- row -->
                <div class="row">
                   <div class="col-lg-6 ">
                      <h2>Our Mission</h2>
                      <span class="h7 mt-2">We provide high quality daycare services</span>
                      <p class="mt-4 res-margin">Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                      <p>Nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
                   </div>
                   <!-- /col-lg-->
                   <div class="col-lg-6 ">
                      <!-- image -->
                      <img class="img-fluid rounded" src="img/about/about2.jpg" alt="">
                      <!-- ornament starts-->
                      <div class="ornament-rainbow" data-aos="zoom-out"></div>
                   </div>
                   <!-- /col-lg -->
                </div>
                <!-- /row -->
                <h3 class="mt-5">Our Features</h3>
                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                <!-- row -->
                <div class="row">
                   <div class="carousel-2items card bg-light owl-carousel owl-theme">
                      <!-- feature -->
                      <div class="feature-with-icon">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-maternity text-primary"></i>
                         </div>
                         <h5>Safe Enviroment</h5>
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                      </div>
                      <!-- /feature-with-icon-->
                      <!-- feature -->
                      <div class="feature-with-icon">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-open-book-1 text-secondary"></i>
                         </div>
                         <h5>Educational activities</h5>
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                      </div>
                      <!-- /feature-with-icon-->
                      <!-- feature -->
                      <div class="feature-with-icon">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-classroom-1 text-primary"></i>
                         </div>
                         <h5>Qualified teachers</h5>
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                      </div>
                      <!-- /feature-with-icon-->
                      <!-- feature -->
                      <div class="feature-with-icon">
                         <div class="icon-features">
                            <!-- icon -->
                            <i class="flaticon-baby-boy text-tertiary"></i>
                         </div>
                         <h5>Infant care</h5>
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                      </div>
                      <!-- /feature-with-icon-->
                   </div>
                   <!-- /carousel-->
                </div>
                <!-- /row -->
                <h3 class="mt-5">What parents say</h3>
                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                <!-- divider -->
                <div class="row mt-5 ">
                   <!-- testimonials -->
                   <!-- testimonial carousel -->
                   <div class="carousel-2items owl-carousel owl-theme col-md-12">
                      <!-- testimonial -->
                      <div class="testimonial">
                         <div class="content">
                            <p class="description">
                               Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                            </p>
                         </div>
                         <!-- /content -->
                         <div class="testimonial-pic">
                            <img src="img/team/team1.jpg" class="img-fluid" alt="">
                         </div>
                         <!-- /testimonial-pic -->
                         <div class="testimonial-review">
                            <h5 class="testimonial-title">Lucianna Smith</h5>
                            <span class="post">Teacher</span>
                         </div>
                         <!-- /testimonial-review -->
                      </div>
                      <!-- /testimonial -->
                      <!-- testimonial -->
                      <div class="testimonial">
                         <div class="content">
                            <p class="description">
                               Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                            </p>
                         </div>
                         <!-- /content -->
                         <div class="testimonial-pic">
                            <img src="img/team/team2.jpg" class="img-fluid" alt="">
                         </div>
                         <!-- /testimonial-pic -->
                         <div class="testimonial-review">
                            <h5 class="testimonial-title">John Sadana</h5>
                            <span class="post">Doctor</span>
                         </div>
                         <!-- /testimonial-review -->
                      </div>
                      <!-- /testimonial -->
                      <!-- testimonial -->
                      <div class="testimonial">
                         <div class="content">
                            <p class="description">
                               Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                            </p>
                         </div>
                         <!-- /content -->
                         <div class="testimonial-pic">
                            <img src="img/team/team3.jpg" class="img-fluid" alt="">
                         </div>
                         <!-- /testimonial-pic -->
                         <div class="testimonial-review">
                            <h5 class="testimonial-title">Jane Janeth</h5>
                            <span class="post">Librarian</span>
                         </div>
                         <!-- /testimonial-review -->
                      </div>
                      <!-- /testimonial -->
                   </div>
                   <!-- /owl-testimonial -->            
                </div>
                <!-- /row -->
                <div class="mt-5">
                   <!-- call to action -->	
                   <div class="enroll-calltoaction col-md-12 card bg-tertiary text-light no-bg-small">
                      <div class="text-center p-3">
                         <div class="col-lg-8 offset-lg-4">
                            <h4>Join our daycare</h4>
                            <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id lorem ipsuet.</p>
                            <!-- Button -->	
                            <div class="text-center">
                               <a href="contact.html" class="btn btn-primary mt-2">Enroll today</a>
                            </div>
                            <!-- /text-center -->	
                         </div>
                         <!-- /col-md-8 -->	
                      </div>
                      <!-- /text-center -->	
                   </div>
                   <!-- /calltoaction -->            
                </div>
                <!-- /mt-5 -->
             </div>
             <!-- /container -->
          </div>
          <!-- /page-with-sidebar -->
          <!-- ==== Sidebar ==== -->
          <div id="sidebar" class="h-50 col-lg-3 sticky-top">
             <!--widget-area -->
             <div class="widget-area notepad">
                <h5 class="sidebar-header">Meet our Team</h5>
                <!-- widget -->		 
                <div class="widget2">
                   <div class="card">
                      <div class="card-img">
                         <!-- image  -->	
                         <a href="team.html">
                         <img class="rounded card-img-top" src="img/about/aboutsidebar.jpg" alt="" >
                         </a>
                      </div>
                      <div class="card-body">
                         <!--  info -->	
                         <a href="team.html" class="text-center">
                            <p><strong>Over 30 Certified professionals</strong></p>
                         </a>
                         <!-- button -->	
                         <a href="team.html" class="btn btn-secondary btn-block btn-sm">See More</a>
                      </div>
                      <!--/card-body -->	
                   </div>
                   <!-- /card -->	
                </div>
                <!--/widget2 -->
             </div>
             <!--/widget-area -->
             <div class="widget-area notepad">
                <h5 class="sidebar-header">Our Mission</h5>
                <p>Aliquam erat volutpat In id fermentum augue Mae cenas at arcu risus. Donec com modo sodales ex.</p>
             </div>
             <!--/widget-area -->
             <div class="widget-area notepad">
                <h5 class="sidebar-header">Follow us</h5>
                <div class="contact-icon-info">
                   <ul class="social-media text-center">
                      <!--social icons -->
                      <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                   </ul>
                </div>
                <!--/contact-icon-info -->
             </div>
             <!--/widget-area -->
          </div>
          <!--/sidebar -->   
       </div>
       <!-- /row -->
    </div>
    <!-- /page -->
 </div>

@endsection

@push('after-script')


@endpush