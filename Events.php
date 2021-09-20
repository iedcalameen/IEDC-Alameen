<?php include('header.php'); ?>


<!-- Body Parts Starts -->


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Upcoming Events</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Check Our Upcoming Events.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>28</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Alameen College, Palakkad.</p>
        <a href="Events-Single.php"><h4 class="card-title">IEDC Meeting</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>18</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Alameen College, Palakkad.</p>
        <a href="Events-Single.php"><h4 class="card-title">IEDC Meeting</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>22</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Alameen College, Palakkad.</p>
        <a href="Events-Single.php"><h4 class="card-title">IEDC Meeting</h4></a>
      </div>
    </div>
  </div>
 
  <div><br>
    <a href="Events.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
  </div>
</div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all our Events</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- Footer Section -->
<?php include("footer.php"); ?>