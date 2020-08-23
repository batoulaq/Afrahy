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
    <link rel="stylesheet" type="text/css" href="template/style.css">
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
            <a class="nav-link text-white" href="#">من نحن</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الأسئلة الشائعة
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="contact.php">اتصل بنا</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link text-white" href="#">دخول</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">تسجيل</a>
            </li>
        </ul>
      </div>
    </nav>
