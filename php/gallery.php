<?php $aid=$_REQUEST['id']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cares.goa.gov.in/wp-content/uploads/2022/12/favicon.ico" sizes="32x32">
    <title>PMU-Cares</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
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
                        <li class="menu-item dropdown-menu-branch">
                            <a href="#" data-toggle="sub-menu">Help Desk <i class="fa-solid fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#">Help Desk User Guide</a></li>
                                <li class="menu-item"><a href="#">Help Desk User Video</a></li>
                            </ul>
                        </li>
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
                <?php
                    include 'connect.php';
                    $sql = "SELECT * FROM pmucares_album WHERE albumid='$aid'";
                    $rs_result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($rs_result)) 
                    {
                        $aimage=$row['image'];
                        $aname=$row['name'];
                        $adesc=$row['adesc'];
                        $astatus=$row['status'];
                        $category=$row['category'];
                        $category=strtoupper($category);
                ?>
                <?php echo" <h2>$aname</h2>" ?>
                <hr>
                <br><br>
                <?php echo" <div class='album-description'><p>$adesc</p></div>" ?>
                <?php
                    }
                ?>
                    <div class="gallery">
                    <?php
                        include 'connect.php';

                        $limit = 18;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $offset = ($page - 1) * $limit;
            
                        $sql = "SELECT * FROM pmucares_gallery WHERE aid=$aid AND status='process' ORDER BY gimages ASC LIMIT $offset, $limit";
                        $num_rows = mysqli_num_rows(mysqli_query($con, $sql));
                        $result = mysqli_query($con, $sql);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            $gimage = $row['gimages'];
                    ?> 
                        <?php echo "<a href='../img/gallery/$gimage'><img src='../img/gallery/$gimage' alt='' data-aos='zoom-in-up' data-aos-once='true'></a>";?>
                        <?php } ?>
                    </div>
            </div>
            <div class="pagenation">
                <?php
                $sql = "SELECT COUNT(*) FROM pmucares_gallery where aid=$aid and status='process'";
                $result = mysqli_query($con, $sql);
                $total_rows = mysqli_fetch_array($result)[0];		
                $total_pages = ceil($total_rows / $limit);

                $prev_page = max(1, $page - 1);
                echo "<a href='?id=$aid&page=1' class='special-btn" . ($page == 1 ? " active-page" : "") . "'><i class='fas fa-step-backward scale'></i></a>";
                echo "<a href='?id=$aid&page=$prev_page' class='special-btn'><i class='fas fa-chevron-left scale'></i></a>";
                
                echo "<div>";
                for($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?id=$aid&page=$i' class='every-page".($page == $i ? " active-page" : "")."'>$i</a>";
                }
                echo "</div>";
                $next_page = min($total_pages, $page + 1);
                echo "<a href='?id=$aid&page=$next_page' class='special-btn'><i class='fas fa-chevron-right scale'></i></a>";
                echo "<a href='?id=$aid&page=$total_pages' class='special-btn" . ($page == 1 ? " active-page" : "") . "'><i class='fas fa-step-forward scale'></i></a>";
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
                        <a href="https://www.youtube.com/channel/UCxFgQGAMuymIvUYTJA8-SGw" target="_blank"><i
                                class="fab fa-youtube scal"></i></a>
                        <a href="https://www.facebook.com/caresgoa" target="_blank"><i
                                class="fab fa-facebook-f scal"></i></a>
                        <a href="https://www.instagram.com/cares_goa" target="_blank"><i
                                class="fab fa-instagram scal"></i></a>
                        <a href="https://www.linkedin.com/company/cares-goa" target="_blank"><i
                                class="fab fa-linkedin scal"></i></a>
                        <a href="https://www.twitter.com/cares_goa" target="_blank"><i
                                class="fab fa-twitter scal"></i></a>
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
                        <a href="https://github.com/Haysten-D-costa/" target="_blank"><i
                                class="fab fa-github scal"></i></a>
                        <a href="https://www.instagram.com/haysten_d_costa/" target="_blank"><i
                                class="fab fa-instagram scal"></i></a>
                        <a href="https://www.linkedin.com/in/haysten-d-costa-625515252/" target="_blank"><i
                                class="fab fa-linkedin-in scal"></i></a>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script>
        AOS.init(); // For activation of the AOS Script...
        lightGallery(document.querySelector('.gallery'));
    </script>
</body>

</html>