<?php 
  include('config/constants.php');
  include('config/functions.php');
 
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $education_level = $_POST['education_level'];
        $age = $_POST['age'];
        $preferred_destination = $_POST['preferred_destination'];
        if(!empty($name) && !empty($phone) && !empty($email) && !empty($education_level)&& !empty($age)&& !empty($preferred_destination)){

            
            $query = "INSERT INTO inquiry(name,phone,email,education_level,age,preferred_destination) VALUES ('$name','$phone','$email','$education_level','$age','$preferred_destination')";

            mysqli_query($conn,$query);

            header("Location: submitted.php");
        }
        else{
            echo "enter valid information!";
        }
    }
   
?>
       <!-- this is the changes  -->
       <!-- this is third change  -->
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Race educare</title>
    <!-- favicon -->
    <link rel="icon" href="assets/img/raceeducare.png" sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Odomiters css -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
<?php include('partials/header.php') ?>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Banner Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="banner-area home-01">
            <div class="container custom-container-01">
                <div class="banner-wrapper">
                    <div class="row">
                        <div class="col-xl-7 col-lg-10">
                            <div class="banner-inner">
                                
                                <h1 class="title">Your Course to <span>success</span> start with us!</h1>
                                <p>Navigate Abroad Studies with Our Expert Consultancy <br> As Per Your Best Fit with top universities and collages.</p>
                                
                                <div class="header-btn">
                                    <div class="btn-wrap">
                                        <a href="#inquiry" class="btn-common flat-btn btn-active">apply now</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="thumbnail">
                                
                                <img src="assets/img/shapes/Ellipse-02.png" class="element-02" alt="Ellipse">
                                <img src="assets/img/shapes/Vector-15.png" class="element-03" alt="vector">
                                <img src="assets/img/header/plane.png" class="element-04" alt="plane">
                                <img src="assets/img/icon/location.png" class="element-05" alt="location">
                                <img src="assets/img/header/header-img1.png" class="banner-img" alt="Student">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Banner Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Features Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="features-section margin-top-100">
            <img src="assets/img/shapes/graduation.png" class="shape" alt="graduation cap">
            <div class="container custom-container-01">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-item">
                            <div class="icon">
                                <img src="assets/img/icon/colleges.png" alt=""width="67px">
                            </div>
                            <div class="content">
                                <h4 class="title">College & University Admission</h4>
                                <p>Embark on Your Academic Journey: Simplify the College and University Admission Process with Expert Guidance and Support!</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-item">
                            <div class="icon">
                                <img src="assets/img/icon/finances.png" alt=""width="67px">
                            </div>
                            <div class="content">
                                <h4 class="title">Financial Documentation Guidance</h4>
                                <p>Streamline Your Financial Documentation: Expert Guidance Ensures Proper Procedures and Peace of Mind!</p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-item">
                            <div class="icon">
                                <img src="assets/img/icon/visas.png" alt="" width="67px">
                            </div>
                            <div class="content">
                                <h4 class="title">Visa Services</h4>
                                <p>Ease Your Journey Abroad: Let Our Visa Services Guide You Through Obtaining the Necessary Documents for Seamless Travel!</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Destinations Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="margin-top-110 section-bottom-space">
            <div class="destination-section">
                <img src="assets/img/shapes/mountant.png" class="shape-01 wow animate__animated animate__delay-1s animate__fadeInUp" alt="mountant">
                <div class="plane-wrap">
                    <img src="assets/img/shapes/plane.png" class="shape-02" alt="mountant">
                </div>
                <div class="container custom-container-01">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="theme-section-title desktop-center text-center">
                                <h4 class="title">Ready To Study Aborad?</h4>
                                <p>We have quality partners in variety of destinations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="destination-items-wrap">
                        
                        <div class="destination-single-item">
                            <div class="thumbnail">
                                <img src="assets/img/sections/destination/usa.png" alt="">
                            </div>
                            <h6 class="name">America</h6>
                        </div>
                        <div class="destination-single-item">
                            <div class="thumbnail">
                                <img src="assets/img/sections/destination/ireland.png" alt="">
                            </div>
                            <h6 class="name">Ireland</h6>
                        </div>
                        
                    </div>
                    <div class="btn-wrap desktop-center margin-top-40 text-center">
                        <a href="#inquiry" class="btn-common fill-btn style-01">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Destinations Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            About Section Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="about-section-area section-top-space about-home-02" id="aboutus">
            <div class="container custom-container-01">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="theme-section-title">
                            <span class="subtitle">ABOUT US & EXPERIENCE</span>
                            <h4 class="title">Your Pathway to Academic Success Starts Here!
                                <svg class="title-shape style-01" width="355" height="15" viewBox="0 0 355 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="path"
                                        d="M351.66 12.6362C187.865 -6.32755 49.6478 6.37132 3.41142 12.6362"
                                        stroke="#764AF1" stroke-width="3" stroke-linecap="square" />
                                    <path class="path" d="M351.66 13C187.865 -5.96378 49.6478 6.73509 3.41142 13"
                                        stroke="#764AF1" stroke-width="3" stroke-linecap="square" />
                                    <path class="path" d="M2.5 5.5C168.5 2.0001 280.5 -1.49994 352.5 8.49985"
                                        stroke="#FFC44E" stroke-width="3" stroke-linecap="square" />
                                </svg>
                            </h4>
                        </div>
                        <div class="about-content-wrap">
                            <p>At Race Educare, we offer a comprehensive range of services to students aiming for studying abroad, covering everything from college selection to visa assistance. Our experienced team ensures that you smoothly navigate the complexities of studying abroad. </p>
                            <p>We specialize in creating personalized education paths aligned with your career goals, leveraging our strong connections with top universities in USA and Ireland.</p>
                            <span class="core">Core strength</span>
                        </div>
                        <div class="counter-section-inner style-a">
                            <div class="single-counterup color-01">
                                <div class="content-wrap">
                                    <div class="odo-area">
                                        <h3 class="odometer odo-title" data-odometer-final="3">0</h3>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle">Years Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-counterup color-02">
                                <div class="content-wrap">
                                    <div class="odo-area">
                                        <h3 class="odometer odo-title style-01" data-odometer-final="74">0</h3>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle">VISA Approved</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-counterup color-03">
                                <div class="content-wrap">
                                    <div class="odo-area">
                                        <h3 class="odometer odo-title style-02" data-odometer-final="96">0</h3>
                                        <h3 class="title">%</h3>
                                    </div>
                                    <div class="content">
                                        <h6 class="subtitle">Admission success</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="contactus.php" class="btn-common fill-btn">Get Free Consultation</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="thumbnail">
                            <img src="assets/img/sections/about/student-in-library.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            About Section Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Steps Section Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="destination-section style-01 margin-top-110 instruction">
            <div class="container custom-container-01">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="theme-section-title desktop-center text-center">
                            <span class="subtitle">STEPS</span>
                            <h4 class="title">Steps to Get your Destination</h4>
                        </div>
                    </div>
                </div>
                <div class="destination-items-wrap">
                    <div class="destination-single-item style-02">
                        <div class="thumbnail">
                            <img src="assets/img/icon/step-01.png" alt="">
                        </div>
                        <h6 class="name">Identify course <br> country & collage</h6>
                    </div>
                    <div class="destination-single-item style-02">
                        <div class="thumbnail">
                            <img src="assets/img/icon/step-02.png" alt="">
                        </div>
                        <h6 class="name">science <br> & professional</h6>
                    </div>
                    <div class="destination-single-item style-02">
                        <div class="thumbnail">
                            <img src="assets/img/icon/step-03.png" alt="">
                        </div>
                        <h6 class="name">Art, Design & <br> Culture</h6>
                    </div>
                    <div class="destination-single-item style-02">
                        <div class="thumbnail">
                            <img src="assets/img/icon/step-04.png" alt="">
                        </div>
                        <h6 class="name">Business & <br> Management</h6>
                    </div>
                    <div class="destination-single-item style-02">
                        <div class="thumbnail">
                            <img src="assets/img/icon/step-05.png" alt="">
                        </div>
                        <h6 class="name">Computer <br> Science & IT</h6>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Steps Section Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!-- inquirey section -->
        <section class="faq-section-area margin-top-90" id="inquiry">
            <div class="container custom-container-01">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="theme-section-title">
                            <span class="subtitle">Get In Touch</span>
                            <h4 class="title">Please drop your Inquiry here.</h4>
                        </div>
                        <div class="faq-content">
                            <h6 class="subtitle">To start consultation and admission, kindly fill up the form , one of our advisers will contact you via email in less than 24 hours</h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-wrapper">
                            <!-- accordion wrapper -->
                            <div id="accordionOne">
            
                               
                                    <form action="" method="post">
                                        <div class="form-row">
                                    
                                            <div class="form-group card">
                                                <input type="text" placeholder="Full Name"class="form-control form-control-lg" id="colFormLabelLg"name="name" required> 
                                            </div>
                                            
                                            <div class="form-group card">
                                                <input type="text" placeholder="Mobile Number"class="form-control form-control-lg" id="colFormLabelLg"name="phone" required> 
                                            </div>
                                            <div class="form-group card">
                                                <input type="text" placeholder="Email Address"class="form-control form-control-lg" id="colFormLabelLg"name="email" required> 
                                            </div><br>
                                            <h5 class="mb-0">
                                                Education Level
                                        </h5>
                                            <div class="form-group card">
                                            <select name="education_level" id="edulev"class="custom-select" id="colFormLabelLg" required >
                                                <option selected>Education Level</option>
                                                <option value="+2">+2</option>
                                                <option value="bachelors">Bachelor</option>
                                                <option value="master">Master</option>
                                                        
                                            <select>
                                            </div>
                                            
                                            <div class="form-group card">
                                                <input type="text" placeholder="Age"class="form-control form-control-lg" id="colFormLabelLg"name="age" required> 
                                            </div><br>
                                            <h5 class="mb-0">
                                                Preferred Destination
                                                </h5>
                                            <div class="form-group card">
                                                
                                                <select name="preferred_destination" id="predes"class="custom-select" id="inputGroupSelect02" required>
                                                    <option selected>Preferred Destination</option>
                                                    <option value="USA">Study in USA</option>
                                                    <option value="Ireland">Study in Ireland</option>                                                         
                                                            
                                                </select>
                                            </div>
                                            <input type="submit" name="submit"class="btn btn-primary">
                                        </div>
                                        
                                    </form>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Faq Section Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="faq-section-area margin-top-90">
            <div class="container custom-container-01">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="theme-section-title">
                            <span class="subtitle">FAQ</span>
                            <h4 class="title">Frequently asked question</h4>
                        </div>
                        <div class="faq-content">
                            <h6 class="subtitle">Still do you have any questions to know? <br> Feel free to ask our experts here.</h6>
                            <div class="btn-wrap">
                                <a href="#inquiry" class="btn-common flat-btn">ASK YOUR QUESTIONS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-wrapper">
                            <!-- accordion wrapper -->
                            <div id="accordionOne">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                1. How to get admission in abroad university?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-bs-parent="#accordionOne">
                                        <div class="card-body">
                                            There are few basics steps Research, Apply Online, Prepare Documents and Wait for Acceptance.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                2. Do you offer complete solution for students?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordionOne">
                                        <div class="card-body">
                                            Yes. We offer complete solutions for the students from applying to document preparetions.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                3. Why study abroad?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-bs-parent="#accordionOne">
                                        <div class="card-body">
                                        Gain a high-quality education, experience new cultures, and expand future job prospects.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                4. Entry requirements?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-bs-parent="#accordionOne">
                                        <div class="card-body">
                                        Vary by country and program; check language proficiency and documents needed.

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                5. Can i get scholarship with my low cGPA?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-bs-parent="#accordionOne">
                                        <div class="card-body">
                                        Certainly! Yes, you can still get scholarships even with a low cGPA. Scholarship selection committees consider other factors beyond GPA.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                6. Do I need a second language?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-bs-parent="#accordionOne">
                                        <div class="card-body">
                                        Not always; many programs offer courses in English.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Faq Section Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <?php include('partials/footer.php') ?>