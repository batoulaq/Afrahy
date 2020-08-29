<?php
$title= 'الأسئلة الشائعة';
require_once 'template/header.php';
?>
<div class="text-center pt-5">
  <h3 > الأسئلة الشائعة</h3>
    <span class="line gold mb-1"></span>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              ماهي منصة أفراحي؟
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                          <b> أفراحي</b> هي منصة تجمع كل من المصورين والمطربين وكل مقدمي خدمات المناسبات والأفراح من مختلف مناطق المملكة وبين الأفراد الذين يحتاجون هذه الخدمات لتساعدهم في بدء أفراحهم .
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        كيف يمكنني ان استفيد من أفراحي؟
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                        يوفر <b>أفراحي</b>  الخدمات الإبداعية التي تحتاجها لمناسبتك,والتي يمكن طلبها من أشخاص مستعدين لخدمتك في إنجازمهامك بسهولة .
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              هل أستطيع التواصل مع مقدم الخدمة؟
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                      بكل تأكيد. ستجد زر "تواصل" في صفحة مقدم الخدمة تمكنك من التواصل معه عن الخدمة المعروضة.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              كيف أدفع لمقدم الخدمة؟
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        كيف يمكن لمقدم الخدمة إضاقة خدماتة الى الموقع؟
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                          بعد التسجيل في الموقع يمكنك إضافة خدماتك من خلال:<br>
إضافة خدمة -> ثم ملئ الحقول المطلوبة.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            ماهي رسوم منصة أفراحي؟
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            يدفع المشتري رسوم إجرائية بنسبة 5% على كل طلب، هذه الرسوم تساعدنا على إدارة وتطوير المنصة.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->

<?php
require_once 'template/footer.php';
?>
