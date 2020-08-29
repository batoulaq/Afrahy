<?php
session_start();
require_once __DIR__.'/../config/app.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html dir="<?php echo $config['dir']?>" lang="<?php echo $config['lang'] ?>">
<head>
  <title><?php echo $config['app_name'] . " | " .$title; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="template/style.css?v=<?php echo time(); ?>">
    <!--  Font Awesome CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand text-white mr-5" href="#">Afrahy logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
          </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="photographers.php">الخدمات</a>
         </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="AboutUs.php">من نحن</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="faq.php" >
              الأسئلة الشائعة
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="contact.php">اتصل بنا</a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item ">
              <a class="nav-link text-white" href="#mylogin" data-toggle="modal">دخول</a>
            </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link text-white" href="#mysingUp" data-toggle="modal">تسجيل</a>
            </li>
          @endif
          @else
        <div class="nav-item dropdown show">
       <a class="nav-link text-white dropdown-toggle mr-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
       </a>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <a class="dropdown-item nav-link text-white" href="addService.php">إضافة خدمة جديدة</a>
         <a class="dropdown-item nav-link text-white" href="#">تعديل الخدمات</a>
       </div>
     </div>
     @endguest
     </ul>
      </div>
    </nav>
<!-- login -->
<div id="mylogin" class="modal fade">
 <div class="modal-dialog modal-login">
   <div class="modal-content">
     <div class="modal-header">
       <h4 class="modal-title">تسجيل دخول</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">
       <form action="/examples/actions/confirmation.php" method="post">
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
             <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required="required">
           </div>
         </div>
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-lock"></i></span>
             <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required="required">
           </div>
         </div>
         <div class="form-group">
           <button type="submit" class="btn  btn-block btn-lg">دخول</button>
         </div>
         <p class="hint-text"><strong><a href="#mypass" data-dismiss="modal" data-toggle="modal">نسيت كلمة المرور؟</a></strong></p>
       </form>
     </div>
     <div class="modal-footer">  ليس لديك حساب؟ <a href="#mysingUp" data-dismiss="modal" data-toggle="modal">  سجل </a></div>
   </div>
 </div>
</div>
<!-- end -->
<!-- singUp -->
<div id="mysingUp" class="modal fade">
 <div class="modal-dialog modal-login">
   <div class="modal-content">
     <div class="modal-header">
       <h4 class="modal-title">تسجيل جديد</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">
       <form action="/examples/actions/confirmation.php" method="post">
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" name="username" placeholder="الإسم" required="required">
           </div>
         </div>
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
             <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required="required">
           </div>
         </div>
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-lock"></i></span>
             <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required="required">
           </div>
         </div>
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-lock"></i></span>
             <input type="password" class="form-control" name="password" placeholder="تأكيد كلمة المرور" required="required">
           </div>
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-block btn-lg">تسجيل</button>
         </div>
       </form>
     </div>
     <div class="modal-footer"> لديك حساب مسبقاً<a href="#mylogin" data-dismiss="modal" data-toggle="modal"> سجل دخول </a></div>
   </div>
 </div>
</div>
<!-- end -->
<!-- forgot password -->
<div id="mypass" class="modal fade">
 <div class="modal-dialog modal-login">
   <div class="modal-content">
     <div class="modal-header">
       <h4 class="modal-title">استعادة كلمة المرور</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">
       <form action="/examples/actions/confirmation.php" method="post">
         <div class="form-group">
           <div class="input-group">
             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
             <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required="required">
           </div>
         </div>
         <div class="form-group">
           <button type="submit" class="btn  btn-block btn-lg">ارسال</button>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>

<!-- end -->
