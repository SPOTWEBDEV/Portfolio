<?php 
include('../server/connection.php');



?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPOTWEB TECH - Personal Portfolio </title>
    <meta name="description" content="SPOTWEB TECH -  Personal Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.svg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
  </head>

  <body>
    <div id="page-content">
      <!-- header part start -->
       <?php include('../include/navbar.php'); ?>
      <!-- header part end -->

      <!-- main area part start -->
      <main>

         <section class="content-box-area mt-4">
          
            <div  class="row g-4 p-2">

              <div  class="col-12">
                <div  class="card content-box-card">
                  <div class="card-body">
                    
                    <div class="client-feedback">
                      <h2 class="main-common-title">What Companies say about me
                      </h2>
                      <div style="display:flex; row-gap:10px" class="row client-feedback-slider"
                        id="company-feedback-slider">

                      </div>
                    </div>


                    <div class="client-feedback">
                      <h2 class="main-common-title">Trusted By 70+ Clients
                      </h2>
                      <div style="display:flex; row-gap:10px" class="row client-feedback-slider" id="client-feedback-slider">
                       
                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>
          
        </section> 



        <!-- background shape area start -->
        <div class="background-shapes">
          <div class="shape-1 common-shape">
            <img src="../assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
          </div>
          <div class="shape-2 common-shape">
            <img src="../assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
          </div>
          <div class="threed-shape-1 move-with-cursor" data-value="1">
            <img src="../assets/img/bg/object-3d-1.png" alt="object-3d-1">
          </div>
          <div class="threed-shape-2 move-with-cursor" data-value="1">
            <img src="../assets/img/bg/object-3d-2.png" alt="object-3d-2">
          </div>
        </div>
        <!-- background shape area end -->
      </main>
      <!-- main area part end -->

      <!-- footer part start -->
      <footer class="footer-area">
        <div class="container">
          <div class="text text-center">
            <p>@ SPOTWEB TECH 2021, Design By <a href="#">Firstclass</a></p>
          </div>
        </div>
      </footer>
      <!-- footer part end -->
    </div>

    <!-- JS here -->
    <script src="../assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/clipboard.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/script.js"></script>


    <script type="module">
      import { companyFeedback,clientFeedback } from './../assets/js/data.js'
      // Dynamically generate Company Feedback section
      const companyFeedbackContainer = document.getElementById("company-feedback-slider");
      const clientFeedbackContainer = document.getElementById("client-feedback-slider");

      companyFeedback.forEach(feedback => {
        const { company, feedback: feedbacks, rating , icon} = feedback
        const feedbackHTML = `
        <div class="col-lg-6">
                        <div class="feedback-item">
                          <div class="feedback-top-info">
                            <div class="rating">
                              ${'<i class="fas fa-star"></i>'.repeat(rating)}${'<i class="fas fa-star"></i>'.repeat(5 - rating)}
                            </div>
                            <div class="website">
                              <a href="#">Visit Website
                                <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                  <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </svg>
                              </a>
                            </div>
                          </div>
                          <div class="details">
                            <img style="max-width:300px; height:50px" src="${icon}" />
                            <p style="margin-top:10px">
                              "${feedbacks}"
                            </p>
                          </div>
                          <div class="designation">
                            <p><span>${company}</span> </p>
                          </div>
                        </div>
                      </div>
  `;
        companyFeedbackContainer.innerHTML += feedbackHTML; // Append to container
      });


      clientFeedback.forEach(feedback => {
        const { name, review,rating ,designation:job} = feedback
        const feedbackHTML = `
        <div class="col-lg-6">
                        <div class="feedback-item">
                          <div class="feedback-top-info">
                            <div class="rating">
                              
                              ${'<i class="fas fa-star"></i>'.repeat(feedback.rating)}${'☆'.repeat(5 - feedback.rating)}
                            </div>
                          </div>
                          <div class="details">
                            <p>
                              "${review}"
                            </p>
                          </div>
                          <div class="designation">
                            <p><span>${name}</span> - ${job}</p>
                          </div>
                        </div>
                      </div>
  `;
  clientFeedbackContainer.innerHTML += feedbackHTML; // Append to container
      });


    </script>
  </body>


</html>