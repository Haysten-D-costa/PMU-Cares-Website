<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="https://cares.goa.gov.in/wp-content/uploads/2022/12/favicon.ico" sizes="32x32">
   <title>PMU-Cares</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
   <link rel="stylesheet" href="../css/header-footer.css">
   <link rel="stylesheet" href="../css/gallery.css">
</head>

<body>
   <!--! HEADER Start -->
   <header class="header">
      <div class="container">
         <div class="header-main">
            <div class="logo-container">
               <a href="../index.php">
                  <img width="auto" height="100" src="../img/logo.png" alt="CARES LOGO"
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
                        <li class="menu-item"><a href="#">About Scheme</a></li>
                        <li class="menu-item"><a href="#">About Wired Internet Scheme</a></li>
                        <li class="menu-item"><a href="#">Know our Team</a></li>
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
   <section class="gallery-section">
            <div class="gallery-section-container">
                <h2>PMU-CARES ALBUMS GALLERY</h2>
                <article class="article"> <!--! FIRST ALBUM - CELEBRATIONS Album-->
                    <div class="gallery-title">
                        <h3 class="title">CELEBRATION ALBUM'S</h3>
                        <h3 class="date">2023 - 2024</h3>
                    </div>
                    <hr>
                    <div class="event-gallery">
                        <div class='column'>
                        <?php
                            include 'connect.php';
                            if(isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
                            $start_from = ($page-1) * 12;
                            $sql = "SELECT * FROM pmucares_album WHERE status='process' AND category='competition' OR category='conference' AND col_id='1' OR col_id='2' ORDER BY albumid DESC LIMIT $start_from, 12";
                            $rs_result = mysqli_query($con, $sql);
                        ?>
                        <?php
                            while ($row = mysqli_fetch_assoc($rs_result)) {
                                $aimage=$row['image'];
                                $aid=$row['albumid'];
                                $aname=$row['name'];
                                $astatus=$row['status'];
                                $category=$row['category'];
                        ?> 
                            <div class='image-container'>
                                <?php echo" <a href='gallery.php?id=$aid'>"; ?>
                                <?php echo" <img src='../img/gallery/$aimage' width='100%' height='100%' alt='Album cover' alt='$aname' data-aos='zoom-in-up' data-aos-once='true'>
                                    <div class='overlay'>
                                        <div class='overlay-text'><h3>$aname</h3></div>
                                    </div>
                                </a>";?>
                            </div>
                        <?php } ?>
                        </div>
                        <div class='column'>
                        <?php
                            include 'connect.php';
                            if(isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
                            $start_from = ($page-1) * 12;
                            $sql = "SELECT * FROM pmucares_album WHERE status='process' AND category='session' OR category='ceremony' AND col_id='3' OR col_id='4' ORDER BY albumid DESC LIMIT $start_from, 12";
                            $rs_result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($rs_result)) {
                                $aimage=$row['image'];
                                $aid=$row['albumid'];
                                $aname=$row['name'];
                                $astatus=$row['status'];
                                $category=$row['category'];
                        ?> 
                            <div class='image-container'>
                                <?php echo" <a href='gallery.php?id=$aid'>"; ?>
                                <?php echo" <img src='../img/gallery/$aimage' width='100%' height='100%' alt='Album cover' alt='$aname' data-aos='zoom-in-up' data-aos-once='true'>
                                    <div class='overlay'>
                                        <div class='overlay-text'><h3>$aname</h3></div>
                                    </div>
                                </a>";?>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </article>
                <br>
                <br>
                <div align="center" class="pagenation-container">
                <?php
                    $sql = "SELECT COUNT(name) FROM pmucares_album";
                    $rs_result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_row($rs_result);
                    $total_records = $row[0];
                    $total_pages = ceil($total_records / 12);
                    for ($i=1; $i<=$total_pages; $i++) {
                        echo "<span class='navigations_items_span'>";
                        echo "<b>PAGE </b>";
                        echo "<a href='celebrations-album-gallery.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";
                        echo "</span>";
                    };
                ?>
            </div>
        </section>
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
   <script src="js/header-footer.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init(); // For activation of the AOS Script...
   </script>
</body>

</html>