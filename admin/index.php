<?php 
    include('../config/constants.php');
    include('../config/functions.php');
    $index_user_data = index_loginval($conn);


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        
        $password = $_POST['pass'];

        if(!empty($username) && !empty($password)){

            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";

            $result = mysqli_query($conn,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password);
                    {
                        $id = $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: dashboard.php");
                        die;
                    }
                        echo '<script>alert("Wrong Password")</script>';
                    
                }
            }
            echo '<script>alert("Wrong Username or Password")</script>';
            
            // header("Location: index.html");
        }
        else{
            
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../assets/img/raceeducare.png" />

    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="login/images/img-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form"action="" method="POST">
                    <span class="login100-form-title">
Member Login
</span>
                    <div class="wrap-input100 " data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">

</span>
                    </div>
                    <div class="wrap-input100 " data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
</span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
Login
</button>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="login/vendor/select2/select2.min.js"></script>

    <script src="login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="login/js/main.js"></script>
</body>

</html>