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
             <h1>Contact</h1>
             <!-- Breadcrumbs -->
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
             <div class="col-md-12">
                <div class="row">
                   <!-- contact-info-->
                   <div class="contact-info col-lg-12">
                      <!-- contact-info-->
                      <h3 class="mb-2">Contact Information </h3>
                      <p class="h7">get in touch with us today</p>
                      <p>Mei te apeirian omittantur reformidans, duo in appetere interesset concludaturque In id fermentum augue cenas at arcu risus lorem onec com modo sodales e
                         Est eruditi erroribus liberavisse in.
                      </p>
                      <h4 class="mt-5">Send us a message</h4>
                      <!-- Form Starts -->
                      <div id="contact_form">
                         <div class="form-group">
                            <div class="row">
                               <div class="col-md-6">
                                  <label>Name<span class="required">*</span></label>
                                  <input type="text" name="name" class="form-control input-field" required=""> 
                               </div>
                               <div class="col-md-6">
                                  <label>Email Address <span class="required">*</span></label>
                                  <input type="email" name="email" class="form-control input-field" required=""> 
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-md-12">
                                  <label>Subject</label>
                                  <input type="text" name="subject" class="form-control input-field"> 
                               </div>
                               <div class="col-md-12">
                                  <label>Message<span class="required">*</span></label>
                                  <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                               </div>
                            </div>
                            <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Send message</button>
                         </div>
                         <!-- /form-group-->
                         <!-- Contact results -->
                         <div id="contact_results"></div>
                      </div>
                      <!-- /contact)form-->
                   </div>
                   <!-- /contact-info-->
                   <div class="col-lg-12">
                      <!-- contact info boxes start-->
                      <div class="contact-info res-margin">
                         <div class="row res-margin mt-5 res-margin">
                            <div class="col-lg-4 mt-5">
                               <div class="contact-icon bg-secondary text-light">
                                  <!---icon-->
                                  <i class="fa fa-envelope top-icon"></i>
                                  <!-- contact-icon info-->
                                  <div class="contact-icon-info">
                                     <h5>Write us</h5>
                                     <p><a href="mailto:email@yoursite.com">email@yoursite.com</a></p>
                                  </div>
                               </div>
                               <!-- /contact-icon-->
                            </div>
                            <!-- /col-lg-->
                            <div class="col-lg-4 mt-5 res-margin">
                               <div class="contact-icon bg-secondary text-light">
                                  <!---icon-->
                                  <i class="fa fa-map-marker top-icon"></i>
                                  <!-- contact-icon info-->
                                  <div class="contact-icon-info">
                                     <h5>Visit us</h5>
                                     <p>Street Name 123 - New York</p>
                                  </div>
                               </div>
                               <!-- /contact-icon-->
                            </div>
                            <!-- /col-lg -->
                            <div class="col-lg-4 mt-5 res-margin">
                               <div class="contact-icon bg-secondary text-light">
                                  <!---icon-->
                                  <i class="fa fa-phone top-icon"></i>
                                  <!-- contact-icon info-->
                                  <div class="contact-icon-info">
                                     <h5>Call us</h5>
                                     <p>(123) 456-789</p>
                                  </div>
                               </div>
                               <!-- /contact-icon-->
                            </div>
                            <!-- /col-lg-->
                         </div>
                         <!-- /row -->
                      </div>
                      <!-- /contact-info-->
                   </div>
                   <!-- /col-lg-->
                </div>
                <!-- /row-->
                <!-- map-->
                <div id="map-canvas" class="mt-5 map-small-height container"></div>
                <!-- /map-->
             </div>
             <!-- /col-lg-12-->
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