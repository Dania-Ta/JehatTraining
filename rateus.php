<?php include('header.php'); ?>


    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>قيمنا</h1>
            <span>نتطلع دائمًا لأن نكون عند حسن ظنكم</span>
          </div>
        </div>
      </div>
    </div>

    <style>
      body {
          font-family: 'Markazi Text', serif;
          font-size: 18px;
      }

      .survey-form {
          background-color: #f8f9fa;
          padding: 30px;
          margin-top: 50px;
          border-radius: 10px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      }

      .survey-form h2 {
          text-align: center;
          font-size: 32px;
          margin-bottom: 20px;
      }

      .survey-form label {
          display: block;
          margin-top: 15px;
          font-size: 20px;
      }

      .survey-form input,
      .survey-form textarea {
          width: 100%;
          padding: 10px;
          margin-top: 8px;
          margin-bottom: 20px;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
          border-radius: 5px;
      }

      .survey-form input[type="submit"] {
          background-color: #007bff;
          color: #fff;
          cursor: pointer;
      }
  </style>
    <div class="container">
      <div class="row">
          <div style="text-align:right; width: 650px; margin: auto;">
              <div class="survey-form">
                  <h2>استبيان قياس مدى رضا المساهمين</h2>
                  <form id="surveyForm" action="#" method="post">
                      <label for="contributorName">اسم المساهم:</label>
                      <input type="text" id="contributorName" name="contributorName" required>

                      <label for="nationalId">رقم الهوية:</label>
                      <input type="text" id="nationalId" name="nationalId" required>

                      <label for="mobileNumber">رقم الجوال:</label>
                      <input type="text" id="mobileNumber" name="mobileNumber" required>


                      <label for="boardPerformance">ما مدى رضاك عن أداء مجلس الإدارة؟</label>
                      <div class="star-rating" >
                        <label>
                          <input type="radio" id="boardPerformance1" name="boardPerformance" value="1" required style="width: 50px;">
                          <span class="boardPerformance1">1 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance2" name="boardPerformance" value="2" required style="width: 50px;">
                          <span class="boardPerformance2">2 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance3" name="boardPerformance" value="3" required style="width: 50px;">
                          <span class="boardPerformance3">3 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance4" name="boardPerformance" value="4" required style="width: 50px;">
                          <span class="boardPerformance4">4 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance5" name="boardPerformance" value="5" required style="width: 50px;">
                          <span class="boardPerformance5">5 من 5</span>
                        </label>
                      </div>

                      <br>
                      

                      <label for="transparencySatisfaction">ما مدى رضاك عن الشفافية في عمل مجلس الإدارة؟</label>


                            <input type="radio" id="transparencySatisfaction1" name="transparencySatisfaction" value="1" required style="width: 50px;">
                            <span class="transparencySatisfaction1">1 من 5</span>
                          </label>
                          <label>
                            <input type="radio" id="transparencySatisfaction2" name="transparencySatisfaction" value="2" required style="width: 50px;">
                            <span class="transparencySatisfaction2">2 من 5</span>
                          </label>
                          <label>
                            <input type="radio" id="transparencySatisfaction3" name="transparencySatisfaction" value="3" required style="width: 50px;">
                            <span class="transparencySatisfaction3">3 من 5</span>
                          </label>
                          <label>
                            <input type="radio" id="transparencySatisfaction4" name="transparencySatisfaction" value="4" required style="width: 50px;">
                            <span class="transparencySatisfaction4">4 من 5</span>
                          </label>
                          <label>
                            <input type="radio" id="transparencySatisfaction5" name="transparencySatisfaction" value="5" required style="width: 50px;">
                            <span class="transparencySatisfaction5">5 من 5</span>

                      

                      <label for="boardPerformance">ما مدى رضاك عن الخدمة المقدمة للمساهم  </label>
                      <div class="star-rating" >
                        <label>
                          <input type="radio" id="boardPerformance1" name="boardPerformance" value="1" required style="width: 50px;">
                          <span class="boardPerformance1">1 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance2" name="boardPerformance" value="2" required style="width: 50px;">
                          <span class="boardPerformance2">2 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance3" name="boardPerformance" value="3" required style="width: 50px;">
                          <span class="boardPerformance3">3 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance4" name="boardPerformance" value="4" required style="width: 50px;">
                          <span class="boardPerformance4">4 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance5" name="boardPerformance" value="5" required style="width: 50px;">
                          <span class="boardPerformance5">5 من 5</span>
                        </label>
                      </div>

                      <br>
                      

                      <label for="boardPerformance">ما مدى رضاك عن سهولة و يسر التواصل بين مجلس الادارة و المساهمين</label>
                      <div class="star-rating" >
                        <label>
                          <input type="radio" id="boardPerformance1" name="boardPerformance" value="1" required style="width: 50px;">
                          <span class="boardPerformance1">1 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance2" name="boardPerformance" value="2" required style="width: 50px;">
                          <span class="boardPerformance2">2 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance3" name="boardPerformance" value="3" required style="width: 50px;">
                          <span class="boardPerformance3">3 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance4" name="boardPerformance" value="4" required style="width: 50px;">
                          <span class="boardPerformance4">4 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance5" name="boardPerformance" value="5" required style="width: 50px;">
                          <span class="boardPerformance5">5 من 5</span>
                        </label>
                      </div>

                      <br>
                      

                      <label for="boardPerformance">ما مدى رضاك عن حرص مجلس الادارة على مشاركة المساهمين والسماع لارائهم</label>
                      <div class="star-rating" >
                        <label>
                          <input type="radio" id="boardPerformance1" name="boardPerformance" value="1" required style="width: 50px;">
                          <span class="boardPerformance1">1 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance2" name="boardPerformance" value="2" required style="width: 50px;">
                          <span class="boardPerformance2">2 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance3" name="boardPerformance" value="3" required style="width: 50px;">
                          <span class="boardPerformance3">3 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance4" name="boardPerformance" value="4" required style="width: 50px;">
                          <span class="boardPerformance4">4 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance5" name="boardPerformance" value="5" required style="width: 50px;">
                          <span class="boardPerformance5">5 من 5</span>
                        </label>
                      </div>

                      <br>
                      

                      <label for="boardPerformance">ما مدى رضاك عن  تيسير التواصل بين المجلس و المساهمين من خلال وسائل التواصل الاجتماعي  </label>
                      <div class="star-rating" >
                        <label>
                          <input type="radio" id="boardPerformance1" name="boardPerformance" value="1" required style="width: 50px;">
                          <span class="boardPerformance1">1 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance2" name="boardPerformance" value="2" required style="width: 50px;">
                          <span class="boardPerformance2">2 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance3" name="boardPerformance" value="3" required style="width: 50px;">
                          <span class="boardPerformance3">3 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance4" name="boardPerformance" value="4" required style="width: 50px;">
                          <span class="boardPerformance4">4 من 5</span>
                        </label>
                        <label>
                          <input type="radio" id="boardPerformance5" name="boardPerformance" value="5" required style="width: 50px;">
                          <span class="boardPerformance5">5 من 5</span>
                        </label>
                      </div>

                      <br>
                    </label>
                    <label for="additionalComments"> امور اخرى تحب سردها  :</label>
                    <textarea id="additionalComments" name="additionalComments" rows="4" required></textarea>
          
                   <input type="submit" value="حفظ الآراء">
                   </label>
                </div>
                <br>

                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  </form>
              </div>
          </div>
      </div>
  </div>



  <?php include('footer.php'); ?>