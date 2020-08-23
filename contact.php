<?php
$title= 'Contact Us';
require_once 'template/header.php';
?>
<?php
function filterString($field){
  $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
  if(empty($field)){
    return false;
  }else{
    return $field;
  }
  return $field;
}
function filterEmail($field){
  $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
  if(filter_var($field, FILTER_VALIDATE_EMAIL)){
    return $field;
  }else{
    return false;
  }
}
$nameError = $emailError = $messageError = '';
$name = $email = $message = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = filterString($_POST['name']);
  if(!$name){
    $_SESSION['contact_form']['name']='';
    $nameError = 'هذا الحقل مطلوب';
  }else{
    $_SESSION['contact_form']['name']=$name;
  }
  $email = filterEmail($_POST['email']);
  if(!$email){
    $_SESSION['contact_form']['email'] = '';
    $emailError = 'هذا الحقل مطلوب';
  }else{
    $_SESSION['contact_form']['email'] = $email;
  }
  $message = filterString($_POST['message']);
  if(!$message){
    $_SESSION['contact_form']['message'] = '';
    $messageError = 'هذا الحقل مطلوب';
  }else{
    $_SESSION['contact_form']['message'] = $message;
  }
if(!$nameError && !$emailError && !$messageError){
    session_destroy(); //delete all data about user that is in website (end session)
    header('Location: contact.php');
    die(); //after submit we should use die();
}
}
?>
<div class="container m-3 p-2">
<h1 id="pageSubject">اتصل بنا</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-page">
  <label for="name">الاسم</label>
  <input type="text" name="name" value="<?php if(isset($_SESSION['contact_form']['name'])) echo $_SESSION['contact_form']['name']?>" class="form-control" placeholder="اسمك" required>
  <span class='text-danger'><?php echo $nameError ?></span>
</div>
<div class="form-page">
<label for="email">البريد الالكتروني</label>
<input type="email" name="email" value="<?php if(isset($_SESSION['contact_form']['email'])) echo $_SESSION['contact_form']['email'] ?>" class="form-control" placeholder="بريدك الالكتروني" required>
<span class='textareat-danger'><?php echo $emailError ?></span>
</div>
<div class="form-page">
<label for="message">محتوى الرسالة</label>
<textarea name="message" class="form-control" placeholder="رسالتك"><?php if(isset($_SESSION['contact_form']['message']))  echo $_SESSION['contact_form']['message'] ?></textarea>
<span class='text-danger'><?php echo $messageError ?></span>
</div>
<button id='send-btn'class="btn btn-success btn-outline-dark m-2" active>ارسال</button>
</form>
</div>
<?php
require_once 'template/footer.php';
?>
