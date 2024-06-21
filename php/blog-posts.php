<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="https://cares.goa.gov.in/wp-content/uploads/2022/12/favicon.ico" sizes="32x32">
   <title>PMU-Cares | News & Posts</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="../css/header-footer.css">
   <link rel="stylesheet" href="../css/blog-posts.css">
</head>

<body>
   <!--! HEADER Start -->
   <header class="header">
      <div class="container">
         <div class="header-main">
            <div class="logo-container">
               <a href="../index.php">
                  <img class="scale" width="auto" height="100" src="../img/logo.png" alt="CARES LOGO"
                     sizes="(max-width: 375px) 100vw, 375px" />
               </a>
            </div>
            <div class="open-nav-menu">
               <span></span>
            </div>
            <div class="menu-overlay"></div>
            <nav class="nav-menu">
               <div class="close-nav-menu">
                  <i class="fa-solid fa-xmark close-menu"></i>
               </div>
               <ul class="menu">
                  <li class="menu-item"><a href="../index.php">Home </a></li>
                  <li class="menu-item dropdown-menu-branch">
                     <a href="#" data-toggle="sub-menu">About Us <i class="fa-solid fa-chevron-down"></i></a>
                     <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Know our Team</a></li>
                        <li class="menu-item"><a href="#">About Scheme</a></li>
                        <li class="menu-item"><a href="#">About Wired Internet Scheme</a></li>
                     </ul>
                  </li>
                  <li class="menu-item dropdown-menu-branch">
                     <a href="#" data-toggle="sub-menu">Resources <i class="fa-solid fa-chevron-down"></i></a>
                     <ul class="sub-menu">
                        <li class="menu-item"><a href="gallery-album.php">Gallery</a></li>
                        <li class="menu-item"><a href="../html/competitions.html">Competition</a></li>
                        <li class="menu-item"><a href="#">Join Us</a></li>
                     </ul>
                  </li>
                  <li class="menu-item"><a href="circulars-orders.html">Circulars & Orders</a></li>
                  <li class="menu-item"><a href="../html/help-desk.html">Help Desk</a></li>
                  <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
               </ul>
            </nav>
         </div>
      </div>
   </header>
   <!--! HEADER End -->

   <!--! MAIN Start -->
   <main class="main-section">
        <h1 class="section-header section-centered">LATEST NEWS & POSTS</h1>
        <div class="blog-container">
            <?php 
            $result = mysqli_query($con, "SELECT * FROM blog_posts");
            while($row = mysqli_fetch_assoc($result)) {
                $truncated_title = substr($row["title"], 0, 50); // Get the truncated title....
                if(strlen($row["title"]) > 50) { // If the title is longer than 50 characters, add ellipsis....
                    $truncated_title .= ' . . .';
                }
            ?>
            <div class="blog scale">
                <div class="blog-image-container">
                    <a href="../<?php echo $row["link_to_image"] ?>">
                        <img src="../<?php echo $row["link_to_image"] ?>" width="300px" height="300px" alt="<?php echo $row["title"] ?>">
                    </a>
                </div>
                <div class="blog-text-container">
                    <div class="blog-details">
                        <span class="blog-class"><?php echo $row["author"] ?></span>
                        <div class="blog-date">
                            <i class="fa-solid fa-clock"></i>
                            <p><?php echo $row["date"] ?></p>
                        </div>
                    </div>
                    <h3 class="blog-title"><?php echo $truncated_title ?></h3>
                </div>
                <a href="<?php echo $row["link_to_post"] ?>">Read More</a>                
            </div>

            <?php
            }
            ?>
        </div>
   </main>
   <!--! MAIN End -->

   <!--! FOOTER Start -->
   <footer class="footer">
      <div class="footer-container">
         <div class="row">
            <div class="footer-col">
               <h2>PMU - Coding And Robotics Education in Schools</h2>
               <figure>
                  <img src="../img/logo1.png" class="scale" alt="CARES Logo" width=100px height=100px>
               </figure>
            </div>
            <div class="footer-col">
               <h4>Quick Links</h4>
               <ul>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="gallery-album.php">Gallery</a></li>
                  <li><a href="#" target="_blank">Directorate of Education</a></li>
                  <li><a href="#">Fee Online Payment</a></li>
               </ul>
            </div>
            <div class="footer-col">
               <h4>About Us</h4>
               <ul>
                  <li><a href="#">About Scheme</a></li>
                  <li><a href="#">About Wired Internet Scheme</a></li>
                  <li><a href="#">About Mhaji Lab, Bari Lab</a></li>
                  <li><a href="#">Know our Team</a></li>
               </ul>
            </div>
            <div class="footer-col">
               <h4>Help</h4>
               <ul>
                  <li><a href="#">Reports - Documents</a></li>
                  <li><a href="#">Latest Update</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Help Desk</a></li>
                  <li><a href="contact-us.html">Contact us</a></li>
               </ul>
            </div>
            <div class="footer-col">
               <h4>Follow us at</h4>
               <div class="social-links scale">
                  <a href="https://www.youtube.com/channel/UCxFgQGAMuymIvUYTJA8-SGw" target="_blank"><i class="fab fa-youtube scal"></i></a>
                  <a href="https://www.facebook.com/caresgoa" target="_blank"><i class="fab fa-facebook-f scal"></i></a>
                  <a href="https://www.instagram.com/cares_goa" target="_blank"><i class="fab fa-instagram scal"></i></a>
                  <a href="https://www.linkedin.com/company/cares-goa" target="_blank"><i class="fab fa-linkedin scal"></i></a>
                  <a href="https://www.twitter.com/cares_goa" target="_blank"><i class="fab fa-twitter scal"></i></a>
              </div>
            </div>
            <div class="footer-col"></div> <!--EMPTY for space! -->
            <div class="footer-col">
               <h4>Policy</h4>
               <ul>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Copyright Policy</a></li>
                  <li><a href="#">Disclaimer</a></li>
                  <li><a href="#">Terms</a></li>
               </ul>
            </div>
            <div class="footer-col">
               <p>
                  Developer : <a href="developer.html" class="unstyled-link">Haysten D'costa</a>
                  <br>haystend@gmail.com
               </p>
               <br>
               <div class="social-links scale">
                  <a href="https://github.com/Haysten-D-costa/" target="_blank"><i class="fab fa-github scal"></i></a>
                  <a href="https://www.instagram.com/haysten_d_costa/" target="_blank"><i
                     class="fab fa-instagram scal"></i></a>
                     <a href="https://www.linkedin.com/in/haysten-d-costa-625515252/" target="_blank"><i class="fab fa-linkedin-in scal"></i></a>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <section class="copyright-section">
      <h4>COPYRIGHT &copy; &nbsp; Coding And Robotics Education in Schools | <i>Haysten D'costa<i></h4>
   </section>
   <!--! FOOTER End -->

   <!--! SCRIPT Section-->
   <script src="../js/header-footer.js"></script>
</body>

</html>