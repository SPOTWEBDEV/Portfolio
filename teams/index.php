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

  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.svg">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
        <div class="px-2">
          <div class="row g-4">
            
            <div class="col-12">
              <div class="card content-box-card">
                <div class="card-body portfolio-card">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title"><span class="text-primary">SPOTWEB TECH</span>  TEAMS </h1>
                    </div>
                  </div>
                  <div class="article-publications article-area">
                    <div id="articles-container" class="row">
                      <!-- Articles will be dynamically injected here -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <script type="module">
              import { teams } from './../assets/js/data.js';
            
              // Dynamically generate article cards
              const TeamsContainer = document.getElementById("articles-container");
            
              teams.forEach(team => {
                const articleHTML = `
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="article-publications-item">
                      <div class="image">
                        <a href="#" class="d-block w-100">
                          <img style="object-position:${team.positionStyle}" src="./../assets/${team.image}" alt="${team.title}" class="img-fluid w-100">
                        </a>
                         <div class="tags-holder">${tags(team.tags)}</div>
                      </div>
                      <div class="text">
                        <a class="title">${team.name}</a>
                        <p>${team.bio}</p>
                        
                      </div>
                    </div>
                  </div>
                `;
                TeamsContainer.innerHTML += articleHTML; // Append the generated HTML to the container
              });
            
              // Function to generate HTML for tags
              function tags(tagsArray) {
                return tagsArray.map(tag => {
                  return `<p href="#" class="tags">${tag}</p>`; // Generate <a> tags for each tag in the array
                }).join(''); // Join all tags into one string
              }


              
            </script>
            
            
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



</html>