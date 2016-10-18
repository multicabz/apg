<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img class="first-slide" src="<?php echo site_url('assets/images/slides/1.png'); ?>" alt="First slide">
    </div>
    <div class="item">
      <img class="second-slide" src="<?php echo site_url('assets/images/slides/2.png'); ?>" alt="Second slide">
    </div>
    <div class="item">
      <img class="third-slide" src="<?php echo site_url('assets/images/slides/3.png'); ?>" alt="Third slide">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->

<div class="jumbotron welcome">
  <h1>WELCOME</h1>
  <p>APG Trade, Inc.'s goal is to provide process, financial, and financial distress management services, to insure that our customers' businesses run efficiently.</p>
  <p><a class="btn btn-small btn-read-more" href="#" role="button">Read more</a></p>
</div>
<div class="row icons text-center">
    <div class="col-md-2 col-md-offset-1">
        <img class="img-circle" src="<?php echo site_url('assets/images/logos/business_process.png'); ?>" alt="Generic placeholder image" width="140" height="140">
        <h2>Business Process Management</h2>
        <p>Making workflow powerful and effective.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-md-2">
        <img class="img-circle" src="<?php echo site_url('assets/images/logos/risk_management.png'); ?>" alt="Generic placeholder image" width="140" height="140">
        <h2>Business Process Management</h2>
        <p>Finding and minimizing financial risks.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-md-2">
        <img class="img-circle" src="<?php echo site_url('assets/images/logos/financial_management.png'); ?>" alt="Generic placeholder image" width="140" height="140">
        <h2>Financial Management</h2>
        <p>Planning and organizing funds</p>
    </div><!-- /.col-lg-4 -->
     <div class="col-md-2">
        <img class="img-circle" src="<?php echo site_url('assets/images/logos/financing_services.png'); ?>" alt="Generic placeholder image" width="140" height="140">
         <h2>Financing Services</h2>
         <p>Operations with credit lines and financial institutions</p>
     </div>
     <div class="col-md-2">
        <img class="img-circle" src="<?php echo site_url('assets/images/logos/financial_distress.png'); ?>" alt="Generic placeholder image" width="140" height="140">
         <h2>Financial Distress Work-Outs</h2>
         <p>Developing a plan in order to minimize impact from an unexpected financial situation</p>
     </div>
</div><!-- /.row -->
