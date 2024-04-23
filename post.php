<?php 
  include('config/constants.php');
  include('config/functions.php');

  $id= $_GET['id'];
	// getting properties from database that are active and featured
	$sql = "SELECT * FROM blogs where id='$id'";

	$res = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($res);
	$row=mysqli_fetch_assoc($res);

	$id = $row['id'];
    $title = $row['title'];
    $blogImage = $row['blogImage'];
    $blogContent = $row['blogContent'];
    $Created_at = $row['created_at'];

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/raceeducare.png">
<title>Race Educare: Posts</title>
<!-- Bootstrap core CSS -->
<link href="blog/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="blog/css/mediumish.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<style>
	a{
		text-decoration: none;
	}
</style>
</head>
<body style="padding-top: 0;">

<?php include('partials/header.php') ?>

<!-- Begin Article
================================================== -->
<div class="container">
	<div class="row">

		<!-- Begin Fixed Left Share -->
		<div class="col-md-2 col-xs-12">
			<div class="share">
				
				<div class="sep">
				</div>
				
			</div>
		</div>
		<!-- End Fixed Left Share -->

		<!-- Begin Post -->
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="mainheading">

				

				<h1 class="posttitle"><?php echo $title ?></h1>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage; ?>" alt="">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<p>
				<?php echo $blogContent ?>
				</p>
				
			</div>
			<!-- End Post Content -->

			

		</div>
		<!-- End Post -->

	</div>
</div>
<!-- End Article
================================================== -->





<!-- Begin Footer
================================================== -->
<?php include('partials/footer.php') ?>
<!-- End Footer
================================================== -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="blog/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="blog/js/bootstrap.min.js"></script>
<script src="blog/js/ie10-viewport-bug-workaround.js"></script>
<script src="blog/js/mediumish.js"></script>
</body>
</html>
