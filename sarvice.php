<?php include('header.php'); ?>


    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>الشكاوي والاقتراحات   </h1>
            <span>لا تتردد من إرسال رسالة الآن</span>
          </div>
        </div>
      </div>
    </div>
    
<body>


  <div class="callback-form contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2> أرسل لنا  <em>شكوتك </em></h2>
            
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="الاسم الكامل" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="البريد الإلكتروني" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="رقم التواصل" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="الشكوى" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">أرسل</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    .contact-information {
        background-color: #f8f9fa; /* Add a background color */
        padding: 50px 0; /* Add padding to the top and bottom */
    }

    .contact-item {
        border: 1px solid #ced4da; /* Add a border */
        padding: 20px; /* Add padding inside the boxes */
        margin-bottom: 20px; /* Add margin to separate the boxes */
        text-align: center; /* Center text */
    }

    .contact-item h4 {
        color: #007bff; /* Change heading color */
    }

    .contact-item p {
        font-size: 18px; /* Change font size */
        color: #495057; /* Change text color */
    }
</style>
<?php include('footer.php'); ?>