<?php include('header.php'); ?>


    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>مكتبة الصور</h1>
          </div>
        </div>
      </div>
    </div>
    
    <style>
      body {
        font-family: 'Markazi Text', serif;
        font-size: 18px;
      }
    
      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        text-align: center; /* Center the items horizontally */
        max-width: 1200px;
        margin: auto;
      }
    
      .gallery-item {
        margin: 10px;
      }
    
      .gallery-item img {
        max-width: 40%;
        height: auto;
        cursor: pointer;
        transition: transform 0.2s;
      }
    
      .gallery-item img:hover {
        transform: scale(1.1);
      }
    </style>
    
    <br>
    <br>
    <br>
    
    <div class="gallery">
      <div class="gallery-item">
        <img src="assets/images/img1.jpg" alt="img1">
      </div>
    
      <div class="gallery-item">
        <img src="assets/images/img2.jpg" alt="img2">
      </div>
    </div>
    
    <br>
    <br>
    <br>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    

    <?php include('footer.php'); ?>