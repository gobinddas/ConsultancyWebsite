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
       
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Race Eduare:contact us</title>
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
<!-- inquirey section -->
<section class="faq-section-area " id="inquiry">
            <div class="container custom-container-01">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="theme-section-title">
                            <span class="subtitle">Contact US</span>
                            <h5 class="title"> <i class="fa fa-phone" style="font-size:36px"></i>  &nbsp; xxx xxxxxx</h5>
                            <h5 class="title"> <i class="fa fa-envelope" style="font-size:36px"></i>  &nbsp; xxxxx@gmail.com</h5>
                            <h5 class="title"> <i class="fa fa-map-marker" style="font-size:36px"></i>  &nbsp; Kathmandu</h5>
                        </div>
                        <div class="faq-content">
                            <h6 class="subtitle">Walk in to our office for free study abroad counselling, application submissions, visa assistance, pre-departure sessions and much more.</h6>
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
                                                <input type="email" placeholder="Email Address"class="form-control form-control-lg" id="colFormLabelLg"name="email" required> 
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
<?php include('partials/footer.php') ?>