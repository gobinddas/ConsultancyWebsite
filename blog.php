<?php 
  include('config/constants.php');
  include('config/functions.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/raceeducare.png">
<title>Race Educare: Blogs</title>
<!-- Bootstrap core CSS -->
<link href="blog/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="blog/css/mediumish.css" rel="stylesheet">
</head>
<body style="padding-top: 0;">

<?php include('partials/header.php') ?>

<!-- Begin Site Title
================================================== -->
<div class="container">

	<div class="mainheading">

		<h1 class="sitetitle">Blogs</h1>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Latest Blogs</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<?php
                    
                    // create a sql query to get all data
                    $sql = "SELECT * FROM blogs";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                    $sn=1;

                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            // $description = $row['description'];
                            $blogImage = $row['blogImage'];
                            $blogContent = $row['blogContent'];
                            $Created_at = $row['created_at'];
                            ?>
		<div class="card">

			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail" style="background-image:url(<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage ?>);">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="<?php echo SITEURL;?>post.php?id=<?php echo $id ?>"><?php echo ucfirst($title); ?></a></h2>
						<h4 class="card-text" ><span style="display: -webkit-box;    -webkit-line-clamp: 3;    -webkit-box-orient: vertical;    overflow: hidden;"><?php echo ucfirst($blogContent) ; ?></span></h4>
						<div class="metafooter">
							<div class="wrapfooter">								
								<span class="post-date"><?php echo $Created_at; ?></span><span class="dot"></span>
								</span>
								<span class="post-read-more"><a href="<?php echo SITEURL;?>post.php?id=<?php echo $id ?>l" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
                        }
                    }
                    else
                    {
                        echo "ERROR";
                    }

                    ?>
		<!--end post -->

		

	</div>
	</section>
	<!-- End List Posts
	================================================== -->

	

</div>
<!-- /.container -->
<<?php include('partials/footer.php') ?>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="blog/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="blog/js/bootstrap.min.js"></script>
<script src="blog/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
