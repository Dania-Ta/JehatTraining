<?php include('header.php'); ?>


    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>مكتبة الفيديو</h1>
            
          </div>
        </div>
      </div>
    </div>
    <style>
      .video-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* You can adjust this value based on your needs */
      }
    
      .video-container iframe {
        margin: 0 10px; /* Adjust the margin value to control the space between the videos */
      }
    </style>
    
    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/NWx8fACM5Ec?si=j4J5NCoUx_DkzM_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/oeopESXJ9jI?si=7DLv_4sh1pKxtBZq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    
    <?php include('footer.php'); ?>