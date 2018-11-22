<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>DMF | Starter</title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
	        page. However, you can choose any other skin. Make sure you
	        apply the skin class to the body tag so the changes take effect. -->
	  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->

	  <!-- Google Font -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	  <?php
	  	if(isset($_REQUEST["controller"])){
	  		if(file_exists("views/".$_REQUEST["controller"]."/header.php")){
	  			require("views/".$_REQUEST["controller"]."/header.php");
	  		}
	  	}
	  ?>
	</head>

	<body class="hold-transition skin-purple fixed sidebar-mini">
		<div class="wrapper">
			<?php
				require("views/_shared/_header.php");

				require("views/_shared/_left_side.php");
			?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">

			    <!-- Main content -->
			    <section class="content container-fluid">
			    	<div class="panel panel-solid">
			    		<div class="panel-heading">
			    			<h3 class="panel-title"><?php echo SITE_TITLE; ?></h3>
			    		</div>
			    		<div class="panel-body">
					        <?php
							  	if(isset($_REQUEST["controller"])){
							  		if(isset($_REQUEST["view"])){
								  		if(file_exists("views/".$_REQUEST["controller"]."/".$_REQUEST["view"].".php")){
								  			require("views/".$_REQUEST["controller"]."/".$_REQUEST["view"].".php");
								  		}else{
								  			require("views/_shared/_notfound.php");
								  		}
								  	}else{
								  		if(file_exists("views/".$_REQUEST["controller"]."/index.php")){
								  			require("views/".$_REQUEST["controller"]."/index.php");
								  		}else{
								  			require("views/_shared/_notfound.php");
								  		}
								  	}
							  	}else{
							  		require("views/home/index.php");
							  	}
						  	?>
						</div>
					</div>
			    </section>
			    <!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<?php require("views/_shared/_footer.php"); ?>
	  
		</div>
		<!-- ./wrapper -->
		<!-- REQUIRED JS SCRIPTS -->

		<!-- jQuery 3 -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>

		<!-- Optionally, you can add Slimscroll and FastClick plugins.
		     Both of these plugins are recommended to enhance the
		     user experience. -->
		<?php
		  	if(isset($_REQUEST["controller"])){
		  		if(file_exists("views/".$_REQUEST["controller"]."/scripts.php")){
		  			require("views/".$_REQUEST["controller"]."/scripts.php");
		  		}
		  	}
	  	?>
	</body>
</html>