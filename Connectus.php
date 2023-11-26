<?php include('header.php'); ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>اتصل بنا</h1>
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
            <h2> أرسل لنا  <em>رسالتك </em></h2>
            
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
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="رسالتك" required=""></textarea>
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

<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-item">
                    <h4>ساعات العمل</h4>
                    <p>من الأحد - الخميس <br> من الساعة 8 ص - 4 م</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-item">
                    <h4>ارقام التواصل</h4>
                    <p>Email: alrahwa@outlook.com <br> Phone: 966503166657+</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<div id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234.5344977662416!2d41.563409617204506!3d19.858901618111354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15ef5dd2f43a303d%3A0xade24c07229c7ad5!2zQkdHQTI4MjHYjCAyODIxINi32LHZitmCINin2YTZhdmE2YMg2YHZiti12YTYjCA3NjkzLCBCYWxqdXJzaGkgNjU2MzUsIFNhdWRpIEFyYWJpYQ!5e0!3m2!1sen!2sus!4v1700587237156!5m2!1sen!2sus"
   width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
<br>
<br>
<br>

    <div class="partners contact-partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php include('footer.php'); ?>