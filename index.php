<?php
$title = 'Home Page';
require_once 'template/header.php';
 ?>

<!-- carousel slide -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner carousel-1 align-items-center justify-content-center text-center">
  <div class="carousel-item active carousel-img">
    <img class="d-block w-100 img-fluid" style="opacity:0.8" src="slide3.h"height="648" alt="First slide">
    <div class="carousel-caption ">
    <h3 class="text-white">نتشرف ونسعد بخدمتكم</h3>
    <button class="btn semi-transparent-button font-weight-bold mt-3">المزيد</button>
    </div>
</div>
  <div class="carousel-item carousel-img">
    <img class="d-block w-100 img-fluid" style="opacity:0.8" src="slide_1.jpg" height="648" alt="Second slide">
    <div class="carousel-caption ">
      <h3 class="text-white">فرحتكم من فرحتنا </h3>
        <button class="btn semi-transparent-button font-weight-bold mt-3">المزيد</button>
      </div>
</div>
  <div class="carousel-item carousel-img">
    <img class="d-block w-100 img-fluid" style="opacity:0.8" src="slide3.h"height="648" alt="Third slide">
    <div class="carousel-caption ">
      <h3 class="text-white">رضاكم مصدر اهتمامنا</h3>
        <button class="btn semi-transparent-button font-weight-bold mt-3">المزيد</button>
      </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">السابق</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">التالي</span>
</a>
</div>
<!--end  -->
<div class="container text-center my-1" id="posts">
      <h2 class="t-black">الخدمات</h2>
      <span class="line gold my-2"></span>
      </div>
  <!-- services -->
  <div class="site-section ">
    <div class="container overlap-section">
    <div class="row">
    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
    <a href="photographers.php" class="unit-1 text-center">
    <img src="wedding-photographer.jpg"  alt="Image" class="img-fluid">
    <div class="unit-1-text">
          <h3 class="unit-1-heading ">المصورين<span class="service-count">06</span></h3>
    </div>
    </a>
    </div>
    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
    <a href="#" class="unit-1 text-center">
    <img src="MakeUp.jpg" alt="Image" class="img-fluid">
    <div class="unit-1-text">
    <h3 class="unit-1-heading">خبراء التجميل<span class="service-count">06</span></h3>
    </div>
    </a>
    </div>
    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
    <a href="#" class="unit-1 text-center">
    <img src="weddingplanner.h" alt="Image" class="img-fluid">
    <div class="unit-1-text">
    <h3 class="unit-1-heading">منسقين الحفلات <span class="service-count">06</span></h3>
    </div>
    </a>
    </div>
    </div>
    </div>
    </div>
  <!-- comments -->
<section class="py-5 text-center">
<div class="container py-2 text-white">
        <h2 class="t-black">قالوا عنا</h2>
        <span class="line gold my-2 w-60"></span>
        <h5 class=" mb-1 t-black">الأفضل لتنسيق أفراحك بالكامل.</h5>
</div>
</section>


<section class="pb-5 bg-light" id="comment-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-8 mx-auto">
            <div class="p-5 bg-white shadow rounded">
                <!-- Bootstrap carousel-->
                <div class="carousel slide" id="carouselComment" data-ride="carousel">
                    <!-- Bootstrap carousel indicators [nav] -->
                    <ol class="carousel-indicators mb-0">
                        <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>


                    <!-- Bootstrap inner [slides]-->
                    <div class="carousel-inner px-5 pb-4">
                        <!-- Carousel slide-->
                        <div class="carousel-item active">
                            <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-1_ffutqr.jpg" alt="" width="75">
                                <div class="media-body ml-3">
                                    <blockquote class="blockquote border-0 p-0">
                                        <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>موقع سلس وسهل، نظم لي وقتي وجهدي في عملي</p>
                                        <footer class="blockquote-footer">محمد <br>
                                            <cite title="Source Title">منظم مناسبات</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel slide-->
                        <div class="carousel-item">
                            <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-3_hdxocq.jpg" alt="" width="75">
                                <div class="media-body ml-3">
                                    <blockquote class="blockquote border-0 p-0">
                                        <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>اسهل موقع للتنسيق مع عملائي </p>
                                        <footer class="blockquote-footer">ساره <br>
                                            <cite title="Source Title">خبيرة تجميل</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel slide-->
                        <div class="carousel-item">
                            <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-2_gibm2s.jpg" alt="" width="75">
                                <div class="media-body ml-3">
                                    <blockquote class="blockquote border-0 p-0">
                                        <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>موقع منظم وسهل الاستخدام </p>
                                        <footer class="blockquote-footer"> فهد <br>
                                            <cite title="Source Title">مصور</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Bootstrap controls [dots]-->
                    <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-angle-left text-dark text-lg"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-angle-right text-dark text-lg"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end -->
<?php require_once 'template/footer.php' ?>
