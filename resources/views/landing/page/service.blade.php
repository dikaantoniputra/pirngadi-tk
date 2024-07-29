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
             <h1>Services</h1>
             <!-- Breadcrumbs -->
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Services</li>
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
    <div class="page">
       <div class="container block-padding">
          <!-- row starts -->
          <div class="row">
             <div class="col-lg-5">
                <h2>Quality Services</h2>
                <span class="h7 mt-3">Our Daycare offer a Safe and Healthy learning environment for all children</span>
             </div>
             <!-- /col-lg-->
             <div class="col-lg-7">
                <p class="mt-2">
                   Quisque at odio nunc. Etiam ac nibh egestas, accumsan felis id, fermentum purus. Quisque vitae hendrerit elit. Maecenas ipsum mi, iaculis quis mattis cursus, auctor ac magna. Integer felis metus, aliquet in dignissim ut, varius et odio. Donec malesuada diam quis dignissim suscipit. Praesent purus turpis, tristique hendrerit
                </p>
             </div>
             <!-- /col-lg -->
          </div>
          <!-- /row -->
          <div class="mt-5">
             <!-- row -->
             <div class="row vertical-tabs">
                <div class="col-lg-12">
                   <!-- navigation -->
                   <div class="tabs-with-icon">
                      <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"><i class="flaticon-abc-block"></i>Daycare</a>
                            <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" ><i class="flaticon-kids-1"></i>Summer Camp</a>
                            <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" ><i class="flaticon-smiling-baby"></i>Infant care</a>
                            <a class="nav-item nav-link" id="tab4-tab" data-toggle="tab" href="#tab4"><i class="flaticon-blackboard"></i>Classes</a>
                            <a class="nav-item nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" ><i class="flaticon-kids"></i>Activities</a>
                         </div>
                      </nav>
                      <!-- tab-content -->
                      <div class="tab-content block-padding bg-light" id="nav-tabContent">
                         <div class="tab-pane active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <!-- row -->
                            <div class="row">
                               <div class="col-lg-6">
                                  <!-- image -->
                                  <img src="img/services/service1.jpg" alt="" class="rounded img-fluid">
                                  <!-- ornament starts-->
                                  <div class="ornament-rainbow" data-aos="fade-right"></div>
                               </div>
                               <!-- col-lg -->
                               <div class="col-lg-6">
                                  <h3>Daycare</h3>
                                  <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                  <ul class="custom pl-0">
                                     <li>Over 30 Qualified professionals</li>
                                     <li>We offer you our quality services since 2002</li>
                                     <li>Educational activities in our daily plan</li>
                                  </ul>
                                  <!-- Button -->	 
                                  <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                               </div>
                               <!-- /col-lg -->
                            </div>
                            <!-- row -->
                         </div>
                         <!-- ./Tab-pane -->
                         <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="row">
                               <div class="col-lg-6">
                                  <h3>Summer Camp</h3>
                                  <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                  <ul class="custom pl-0">
                                     <li>Over 30 Qualified professionals</li>
                                     <li>We offer you our quality services since 2002</li>
                                     <li>Educational activities in our daily plan</li>
                                  </ul>
                                  <!-- Button -->	 
                                  <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                               </div>
                               <!-- /col-lg -->
                               <div class="col-lg-6 res-margin">
                                  <!-- image -->
                                  <img src="img/services/service2.jpg" alt="" class="rounded img-fluid">
                                  <!-- ornament starts-->
                                  <div class="ornament-stars" data-aos="fade-right"></div>
                               </div>
                               <!-- col-lg -->
                            </div>
                            <!-- row -->
                         </div>
                         <!-- ./Tab-pane -->
                         <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="row">
                               <div class="col-lg-6">
                                  <!-- image -->
                                  <img src="img/services/service3.jpg" alt="" class="rounded img-fluid">
                                  <!-- ornament starts-->
                                  <div class="ornament-bubbles" data-aos="fade-right"></div>
                               </div>
                               <!-- col-lg -->
                               <div class="col-lg-6">
                                  <h3>Infant Care</h3>
                                  <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                  <ul class="custom pl-0">
                                     <li>Over 30 Qualified professionals</li>
                                     <li>We offer you our quality services since 2002</li>
                                     <li>Educational activities in our daily plan</li>
                                  </ul>
                                  <!-- Button -->	 
                                  <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                               </div>
                               <!-- /col-lg -->
                            </div>
                            <!-- row -->
                         </div>
                         <!-- ./Tab-pane -->
                         <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                            <div class="row">
                               <div class="col-lg-6">
                                  <h3>Classes</h3>
                                  <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                  <ul class="custom pl-0">
                                     <li>Over 30 Qualified professionals</li>
                                     <li>We offer you our quality services since 2002</li>
                                     <li>Educational activities in our daily plan</li>
                                  </ul>
                                  <!-- Button -->	 
                                  <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                               </div>
                               <!-- /col-lg -->
                               <div class="col-lg-6 res-margin">
                                  <!-- image -->
                                  <img src="img/services/service4.jpg" alt="" class="rounded img-fluid">
                                  <!-- ornament starts-->
                                  <div class="ornament-stars" data-aos="fade-right"></div>
                               </div>
                               <!-- col-lg -->
                            </div>
                            <!-- row -->
                         </div>
                         <!-- ./Tab-pane -->
                         <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                            <div class="row">
                               <div class="col-lg-6">
                                  <!-- image -->
                                  <img src="img/services/service5.jpg" alt="" class="rounded img-fluid">
                                  <!-- ornament starts-->
                                  <div class="ornament-rainbow" data-aos="fade-right"></div>
                               </div>
                               <!-- col-lg -->
                               <div class="col-lg-6">
                                  <h3>Activities</h3>
                                  <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                  <ul class="custom pl-0">
                                     <li>Over 30 Qualified professionals</li>
                                     <li>We offer you our quality services since 2002</li>
                                     <li>Educational activities in our daily plan</li>
                                  </ul>
                                  <!-- Button -->	 
                                  <a href="services-single.html" class="btn btn-secondary mt-4">Read More</a>
                               </div>
                               <!-- /col-lg -->
                            </div>
                            <!-- row -->
                         </div>
                         <!-- ./Tab-pane -->
                      </div>
                      <!-- ./Tab-content -->
                   </div>
                   <!-- vertical-tabs -->
                </div>
                <!-- /col-lg-6 -->
             </div>
             <!-- /row --> 
          </div>
          <!-- /mt-5 -->	  
       </div>
       <!-- /container -->
    </div>
    <!-- /page -->
 </div>
@endsection

@push('after-script')


@endpush