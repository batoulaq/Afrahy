<?php
$title = 'إضافة خدمة';
require_once 'template/header.php';
 ?>

 <div class="text-center pt-5">
   <h3 > إضافة خدمة</h3>
     <span class="line gold mb-1"></span>
 </div>
 <div class="container py-4">
 <form>
   <fieldset class="form-group">
     <div class="row">
       <legend class="col-form-label col-sm-2 pt-0">نوع الخدمة</legend>
       <div class="col-sm-10">
         <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" required>
       <label class="custom-control-label" for="customRadioInline1">مصور</label>
     </div>
     <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" required>
       <label class="custom-control-label" for="customRadioInline2">منسق حفلات</label>
     </div>
     <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input" required>
       <label class="custom-control-label" for="customRadioInline3">خبير تجميل</label>
     </div>
       </div>
     </div>
   </fieldset>
   <div class="form-group row">
      <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">المدينة</label>
      <div class="col-sm-10">
      <select class="form-control" id="exampleFormControlSelect1" required>
        <option>الرياض</option>
        <option>جدة</option>
        <option>الدمام</option>
      </select>
    </div>
  </div>
   <div class="form-group row">
     <label for="inputEmail3" class="col-sm-2 col-form-label">رقم الجوال</label>
     <div class="col-sm-10">
       <input type="tel" class="form-control" id="inputEmail3" placeholder="05x xxx xxxx" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  title="Ten digits code" required>
     </div>
   </div>
   <div class="form-group row">
     <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">نبذة عنك</label>
     <div class="col-sm-10">
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>     </div>
   </div>
   <div class="form-group row">
     <label for="inputSite" class="col-sm-2 col-form-label">رابط موقعك الشخصي</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="inputSite" required>
     </div>
   </div>
   <div class="text-center">
     <div class="row">
       <button type="submit" class="btn mx-auto my-4 py-2 col-2 submitService">إرسال</button>
     </div>
   </div>
 </form>
</div>
 <?php require_once 'template/footer.php' ?>
