<?php 
include('../server/connection.php');


?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from marveltheme.com/tf/html/bentofolio-html/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2024 12:45:09 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPOTWEB TECH - Bootstrap Personal Portfolio Template</title>
  <meta name="description" content="Bentofolio - Bootstrap Personal Portfolio Template">
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
        <div class="container">
          <div class="row g-4">
            <div class="col-xl-4">
              <div class="card profile-card">
                <div class="card-body">
                  <div class="image text-center">
                    <img style="width:100%;" src="../assets/img/me/1.jpg" alt="profile">
                  </div>
                  <div class="text">
                    <h3 class="card-title">Ezea Ugochukwu Micheal (Firstclass) 👋</h3>
                    <!-- <p>A Passionate <span>Full Stack Developer</span> 🖥️ & <span>Product Designer</span> having
                      <span>12
                        years</span> of Experiences over 24+
                      Country Worldwide.</p> -->
                    <p>
                      <span>Ezea Ugochukwu Micheal</span> helps businesses and individuals create amazing websites and
                      online tools. Whether you need a simple website to showcase your business, an online store to
                      sell your products, or a custom platform to manage your work, <span>Firstclass</span> has the
                      skills to bring your ideas to life.
                    </p>
                    <div class="common-button-groups">
                      <!-- WhatsApp Button -->
                      <a class="btn btn-call" href="https://wa.me/08108833188" target="_blank">
                        <svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.5 4H9.5L11.5 9L9 10.5C10.071 12.6715 11.8285 14.429 14 15.5L15.5 13L20.5 15V19C20.5 19.5304 20.2893 20.0391 19.9142 20.4142C19.5391 20.7893 19.0304 21 18.5 21C14.5993 20.763 10.9202 19.1065 8.15683 16.3432C5.3935 13.5798 3.73705 9.90074 3.5 6C3.5 5.46957 3.71071 4.96086 4.08579 4.58579C4.46086 4.21071 4.96957 4 5.5 4Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M15.5 7C16.0304 7 16.5391 7.21071 16.9142 7.58579C17.2893 7.96086 17.5 8.46957 17.5 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M15.5 3C17.0913 3 18.6174 3.63214 19.7426 4.75736C20.8679 5.88258 21.5 7.4087 21.5 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Chat with me on WhatsApp
                      </a>
                    
                      <!-- Email Button -->
                      <a class="btn btn-email" href="mailto:SPOTWEB TECH.com@gmail.com?subject=Hello%20from%20Your%20Website&body=I%20would%20like%20to%20chat%20with%20you!" target="_blank">
                        <i class="bi bi-envelope"></i>
                        
                        Send me a message on email
                      </a>
                    
                      <!-- Copy Email Button (Optional) -->
                      <button class="btn btn-copy" data-clipboard-text="example@example.com">
                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 10C8 9.46957 8.21071 8.96086 8.58579 8.58579C8.96086 8.21071 9.46957 8 10 8H18C18.5304 8 19.0391 8.21071 19.4142 8.58579C19.7893 8.96086 20 9.46957 20 10V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H10C9.46957 20 8.96086 19.7893 8.58579 19.4142C8.21071 19.0391 8 18.5304 8 18V10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M16 8V6C16 5.46957 15.7893 4.96086 15.4142 4.58579C15.0391 4.21071 14.5304 4 14 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6V14C4 14.5304 4.21071 15.0391 4.58579 15.4142C4.96086 15.7893 5.46957 16 6 16H8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Copy Email
                      </button>
                    </div>
                    
                    <div class="social-media-icon">
                      <ul class="list-unstyled">
                        <li><a href="https://github.com/SPOTWEB TECH"><i class="fab fa-github"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="card content-box-card">
                <div class="card-body">
                 
                  <div class="frequently-asked-questions">
                           <h2 class="main-common-title">Frequently Asked Questions</h2>
                           <div class="frequently-asked-questions-main">
                             <div class="accordion" id="accordionExample">
                               <div class="accordion-item">
                                 <h4 class="accordion-header" id="headingOne">
                                   <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     What services do you offer as a web developer?
                                     <span class="ms-auto">
                                       <span class="icon ms-4">
                                         <img class="icon-plus" src="../assets/img/icons/plus.svg" alt="plus">
                                         <img class="icon-minus d-none" src="../assets/img/icons/minus.svg" alt="minus">
                                       </span>
                                     </span>
                                   </button>
                                 </h4>
                                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                   data-bs-parent="#accordionExample">
                                   <div class="accordion-body">
                                     <p>I offer end-to-end web development services, including creating websites, online stores, and custom web applications. I handle both the design and the technical setup, ensuring a complete solution tailored to your needs.</p>
                                   </div>
                                 </div>
                               </div>
                         
                               <div class="accordion-item">
                                 <h4 class="accordion-header" id="headingTwo">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     How long does it take to complete a project?
                                     <span class="ms-auto">
                                       <span class="icon ms-4">
                                         <img class="icon-plus" src="../assets/img/icons/plus.svg" alt="plus">
                                         <img class="icon-minus d-none" src="../assets/img/icons/minus.svg" alt="minus">
                                       </span>
                                     </span>
                                   </button>
                                 </h4>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                   data-bs-parent="#accordionExample">
                                   <div class="accordion-body">
                                     <p>The timeline depends on the complexity of your project. Simple websites can take a week or two, while more complex applications may require several weeks or months. I'll provide a clear timeline during our initial consultation.</p>
                                   </div>
                                 </div>
                               </div>
                         
                               <div class="accordion-item">
                                 <h4 class="accordion-header" id="headingThree">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     Do you provide ongoing support after the project is completed?
                                     <span class="ms-auto">
                                       <span class="icon ms-4">
                                         <img class="icon-plus" src="../assets/img/icons/plus.svg" alt="plus">
                                         <img class="icon-minus d-none" src="../assets/img/icons/minus.svg" alt="minus">
                                       </span>
                                     </span>
                                   </button>
                                 </h4>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                   data-bs-parent="#accordionExample">
                                   <div class="accordion-body">
                                     <p>Yes, I provide maintenance and support services to ensure your website or application continues to run smoothly. This includes updates, bug fixes, and adding new features as needed.</p>
                                   </div>
                                 </div>
                               </div>
                         
                               <div class="accordion-item">
                                 <h4 class="accordion-header" id="headingFour">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     Can you help with redesigning an existing website?
                                     <span class="ms-auto">
                                       <span class="icon ms-4">
                                         <img class="icon-plus" src="../assets/img/icons/plus.svg" alt="plus">
                                         <img class="icon-minus d-none" src="../assets/img/icons/minus.svg" alt="minus">
                                       </span>
                                     </span>
                                   </button>
                                 </h4>
                                 <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                   data-bs-parent="#accordionExample">
                                   <div class="accordion-body">
                                     <p>Absolutely! I can revamp your existing website to improve its design, functionality, and performance, making it more modern and user-friendly.</p>
                                   </div>
                                 </div>
                               </div>
                         
                               <div class="accordion-item">
                                 <h4 class="accordion-header" id="headingFive">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                     How much do you charge for your services?
                                     <span class="ms-auto">
                                       <span class="icon ms-4">
                                         <img class="icon-plus" src="../assets/img/icons/plus.svg" alt="plus">
                                         <img class="icon-minus d-none" src="../assets/img/icons/minus.svg" alt="minus">
                                       </span>
                                     </span>
                                   </button>
                                 </h4>
                                 <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                   data-bs-parent="#accordionExample">
                                   <div class="accordion-body">
                                     <p>My rates depend on the scope and complexity of the project. Once we discuss your requirements, I’ll provide a detailed quote and ensure it fits within your budget.</p>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
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
</body>



<!-- Mirrored from marveltheme.com/tf/html/bentofolio-html/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Dec 2024 12:45:12 GMT -->
</html>