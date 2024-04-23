<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency converter</title>
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
<div class="container">
    <br><br>
	
    <!--Currency Converter widget by FreeCurrencyRates.com -->

    <div id='gcw_mainFdBIpOT06' class='gcw_mainFdBIpOT06'></div>
    
    <script>function reloadFdBIpOT06(){ var sc = document.getElementById('scFdBIpOT06');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFdBIpOT06';sc.src = 'https://freecurrencyrates.com/en/widget-vertical?iso=USD-EUR-GBP-JPY-CNY-XUL&df=1&p=FdBIpOT06&v=fits&source=fcr&width=400&width_title=0&firstrowvalue=1&thm=C8C8C8,7F99B2,C8C8C8,330099,FFFFFF,C8C8C8,3333CC,FFFFFF,FFFFFF&title=Currency%20Converter&tzo=-345';var div = document.getElementById('gcw_mainFdBIpOT06');div.parentNode.insertBefore(sc, div);} reloadFdBIpOT06(); </script>
    <!-- put custom styles here: .gcw_mainFdBIpOT06{}, .gcw_headerFdBIpOT06{}, .gcw_ratesFdBIpOT06{}, .gcw_sourceFdBIpOT06{} -->
    <!--End of Currency Converter widget by FreeCurrencyRates.com -->
    <br><br>
</div>

<?php include('partials/footer.php') ?>
</body>
</html>