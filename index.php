<?php include 'php/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cares.goa.gov.in/wp-content/uploads/2022/12/favicon.ico" sizes="32x32">
    <title>PMU-Cares</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- HEADER-START -->
    <header class="header">
        <div class="container">
            <div class="header-main">
                <div class="logo-container">
                    <a href="index.php">
                        <img class="scale" width="auto" height="100" src="img/logo.png" alt="CARES LOGO"
                            sizes="(max-width: 375px) 100vw, 375px" />
                    </a>
                </div>
                <div class="nav-container">
                    <div class="open-nav-menu">
                        <span></span>
                    </div>
                    <div class="menu-overlay"></div>
                    <nav class="nav-menu">
                        <div class="close-nav-menu">
                            <i class="fa-solid fa-xmark close-menu"></i>
                        </div>
                        <ul class="menu">
                            <li class="menu-item"><a href="index.php">Home </a></li>
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
                                    <li class="menu-item"><a href="php/gallery-album.php">Gallery</a></li>
                                    <li class="menu-item"><a href="html/competitions.html">Competition</a></li>
                                    <li class="menu-item"><a href="#">Join Us</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="html/circulars-orders.html">Circulars & Orders</a></li>
                            <li class="menu-item"><a href="html/help-desk.html">Help Desk</li>
                            <li class="menu-item"><a href="html/contact-us.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER-END -->

    <!--! MAIN-START -->
    <main class="main-section">

        <!--Section1 start-->
        <section class="main-header-section">
            <div id="container1" class="header-container">
                <h1>Coding And Robotics Education in Schools Scheme</h1>
                <p>
                    Mission to develop Computational & Design Thinking skills along with programming integrated into the school level education for the State of Goa.
                </p>
                <a href="img/Elective-2024-25.jpg" class="btn">Elective curriculum details 2024 - 2025</a>
            </div>
            <div id="container2" class="header-container">
                <img src="img/BuddyTeachers_TFG1.jpg" class="img1 scale" height="auto" width="405px" alt="Buddy teachers TFG1" >
                <img src="img/Blender-Nation-Thon-TalukaLevel-13.jpg" class="img2 scale" height="auto" width="220px" alt="Blender nation-thon taluka level" >
            </div>
            <div class="quote-container scale">
            <p data-aos="fade-left" data-aos-offset="290" data-aos-easing="ease-in-sine" data-aos-once="true" class="quote"><i>"Persistent questioning and healthy inquisitiveness are the first requisite for acquiring learning of any kind"</i> <b>- Mahatma Gandhi</b></p>
            </div>
        </section>
        <!--Section1 end-->
        
        <!--Section2 start-->
        <section class="about-cares-section section">
            <h1 class="section-header">ABOUT CARES</h1>
            <div class="about-container">
                <div class="cares-mission">
                    <h2>PMU - CARES Mission Statement</h2>
                    <p class="reveal-text">
                        Mission to develop computational and design thinking skills along with programming integrated into the school level education for the State of Goa to prepare students for the demands of the 21st-century digital world.
                        To incorporate Computational and Design thinking abilities, as well as programming, into school-level teaching in the state of Goa, in order to prepare students for the needs of the digital world of the twenty-first century.
                    </p>
                    <a href="#" class="a-btn scale">Know More</a>
                </div>
                <div class="cares-video">
                    <iframe 
                        width="560" height="315" src="https://www.youtube.com/embed/cZupOFGmB5Y?si=WJookUY_elpnHIzI" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <!--Section2 end-->

        <!--Section3 start-->
        <section class="blog-post-section section">
            <h1 class="section-header section-centered">LATEST NEWS & POSTS</h1>
            <div class="blog-container">
                <?php 

                $start = 0;
                $posts_per_page = 3;

                $records = mysqli_query($con, "SELECT * FROM blog_posts");
                $no_rows = $records->num_rows;
                $pages = ceil($no_rows / $posts_per_page); 

                $result = mysqli_query($con, "SELECT count(*) AS total FROM blog_posts");

                if($row = mysqli_fetch_assoc($result)) {
                    $total_posts = $row['total'];
                }
                $result = mysqli_query($con, "SELECT * FROM blog_posts LIMIT $start, $posts_per_page");
                while($row = mysqli_fetch_assoc($result)) {
                    $truncated_title = substr($row["title"], 0, 50); // Get the truncated title....
                    if(strlen($row["title"]) > 50) { // If the title is longer than 50 characters, add ellipsis....
                        $truncated_title .= ' . . .';
                    }
                ?>
                <div class="blog scale">
                    <div class="blog-image-container">
                        <a href="<?php echo $row["link_to_image"] ?>">
                            <img src="<?php echo $row["link_to_image"] ?>" width="300px" height="300px" alt="<?php echo $row["title"] ?>">
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
            <div class="a-btn-container scale">
                <a href="php/blog-posts.php" class="scale km-btn a-btn">View More Posts</a>
            </div>

        </section>
        <!--Section3 end-->

        <!--Section4 start-->
        <section class="competitions-section section">
            <h1>COMPETITIONS</h1>
            <div class="competitions-container">
                <!-- <div class="competitions-image">
                    <img src="img/post.png" width="300px" height="auto" alt="">
                </div> -->
                <div class="competitions-content">
                    <a href="#" class="competition-cards scale">
                        <i class="fa-solid fa-lightbulb scale"></i>
                        'Junior Entrepreneurs: From Idea to Impact' Bootcamp
                    </a>
                    <a href="#" class="competition-cards scale">
                        <i class="fa-solid fa-code scale"></i>
                        Goa Codes 2024
                    </a>
                    <a href="#" class="competition-cards scale">
                        <i class="fa-solid fa-brain scale"></i>
                        Critical Thinking Diwali - Boot Camp
                    </a>
                    <!-- <a href="#" class="competition-cards scale">
                        <i class="fa-solid fa-cubes scale"></i>
                        Blender BootCamp 2023
                    </a> -->
                    <!-- <a href="#" class="competition-cards scale">
                        <i class="fa-solid fa-laptop-code scale"></i>
                        Goa-Codes 2023
                    </a> -->
                </div>
            </div>
        </section>
        <!--Section4 end-->

    </main>
    <!--! MAIN-END -->

    <!-- FOOTER-START -->
    <footer class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h2>PMU - Coding And Robotics Education in Schools</h2>
                    <figure>
                        <img src="img/logo1.png" class="scale" alt="" width=100px height=100px>
                    </figure>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="php/gallery-album.php">Gallery</a></li>
                        <li><a href="#" target="_blank">Directorate of Education</a></li>
                        <li><a href="#">Fee Online Payment</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">About Scheme</a></li>
                        <li><a href="#">About Mhaji Lab, Bari Lab</a></li>
                        <li><a href="#">Wired Internet Scheme</a></li>
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
                        <li><a href="html/contact-us.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us on</h4>
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
                        <a href="https://www.instagram.com/haysten_d_costa/" target="_blank"><i class="fab fa-instagram scal"></i></a>
                        <a href="https://www.linkedin.com/in/haysten-d-costa-625515252/" target="_blank"><i class="fab fa-linkedin-in scal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright-section">
        <h4>COPYRIGHT &copy; &nbsp; Coding And Robotics Education in Schools | <i>Haysten D'costa<i></h4>
    </section>
    <!-- FOOTER-END -->

    <!--! Scripts section-->
    
    <script src="js/script.js"></script>
    <script src="js/header-footer.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init(); // For activation of the AOS Script...
    </script>
</body>

</html>