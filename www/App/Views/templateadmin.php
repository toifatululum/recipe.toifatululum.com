<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<?php echo BASE; ?>/assets/admin/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo BASE; ?>/assets/admin/css/now-ui-dashboard.css" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link href="<?php echo BASE; ?>/assets/admin/demo/demo.css" rel="stylesheet" />
</head>
<body>
	<?php if (isset($_SESSION)) {
		if ($_SESSION['role'] !== "ADMIN") {
			header("location:". BASE . '/index/login');
		}
	} else {
		header("location:". BASE . '/index/login');
	}
	?>
	<div class="wrapper ">
		<div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
    	<a href="#" class="simple-text logo-mini">
    		Admin
    	</a>
    	<a href="#" class="simple-text logo-normal">
    		Toifatul Ulum
    	</a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
    	<ul class="nav">
    		<li>
    			<a href="<?php echo BASE . "/admin/admin" ?>">
    				<i class="now-ui-icons design_app"></i>
    				<p>Admin</p>
    			</a>
    		</li>
    		<li>
    			<a href="<?php echo BASE . "/admin/users" ?>">
    				<i class="now-ui-icons design_bullet-list-67"></i>
    				<p>User</p>
    			</a>
    		</li>
    		<li>
    			<a href="<?php echo BASE . "/admin/recipe" ?>">
    				<i class="now-ui-icons design_bullet-list-67"></i>
    				<p>Recipe</p>
    			</a>
    		</li>
    		<li>
    			<a href="<?php echo BASE . "/admin/transaction" ?>">
    				<i class="now-ui-icons text_caps-small"></i>
    				<p>Transaction</p>
    			</a>
    		</li>
    		<li>
    			<a href="<?php echo BASE . "/admin/tags" ?>">
    				<i class="now-ui-icons text_caps-small"></i>
    				<p>Category</p>
    			</a>
    		</li>
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Toifatul Ulum</p>
            </a>
        </li> -->
    </ul>
</div>
</div>
<div class="main-panel" id="main-panel">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<div class="navbar-toggle">
					<button type="button" class="navbar-toggler">
						<span class="navbar-toggler-bar bar1"></span>
						<span class="navbar-toggler-bar bar2"></span>
						<span class="navbar-toggler-bar bar3"></span>
					</button>
				</div>
				<a class="navbar-brand" href="#pablo">Admin Site</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-bar navbar-kebab"></span>
				<span class="navbar-toggler-bar navbar-kebab"></span>
				<span class="navbar-toggler-bar navbar-kebab"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navigation">
				<form>
					<div class="input-group no-border">
						<input type="text" value="" class="form-control" placeholder="Search...">
						<div class="input-group-append">
							<div class="input-group-text">
								<i class="now-ui-icons ui-1_zoom-bold"></i>
							</div>
						</div>
					</div>
				</form>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="now-ui-icons location_world"></i>
							<p>
								<span class="d-lg-none d-md-block">Some Actions</span>
							</p>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a href="" class="dropdown-item" data-toggle="modal" data-target="#exampleModal1" data-whatever="<?php echo $_SESSION['id'] ?>" data-role="<?php echo $_SESSION['role'] ?>">Edit Profile</a>
							<a class="dropdown-item" href="<?php echo BASE . '/index/action_logout'?>">Logout</a>
						</div>

					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="panel-header panel-header-sm">
	</div>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	
</div>
</div>



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form method="post" action="<?php echo BASE . "/admin/edit" ?>">
					<input type="text" class="id" hidden name="id">
					<input type="text" class="role" hidden name="role">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Username:</label>
						<input type="text" value="<?php echo $_SESSION['username'] ?>" name="username" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name:</label>
						<input type="text" value="<?php echo $_SESSION['name'] ?>" name="name" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Password:</label>
						<input type="password"  name="password" class="form-control" id="recipient-name">
					</div>

					<div class="form-group">
						<label for="message-text" class="col-form-label">Email:</label>
						<input type="email" value="<?php echo $_SESSION['email'] ?>" name="email" class="form-control" id="recipient-name">
					</div>
					<div class="modal-footer">
						<button type="submit" data-toggle="modal" class="btn btn-primary">Simpan</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>


</body>
<script src="<?php echo BASE; ?>/assets/admin/js/core/popper.min.js"></script>
<script src="<?php echo BASE; ?>/assets/admin/js/core/bootstrap.min.js"></script>
<script src="<?php echo BASE; ?>/assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo BASE; ?>/assets/admin/js/plugins/chartjs.min.js"></script>
<script src="<?php echo BASE; ?>/assets/admin/js/plugins/bootstrap-notify.js"></script>
<script src="<?php echo BASE; ?>/assets/admin/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
<script src="<?php echo BASE; ?>/assets/admin/demo/demo.js"></script>
<script>
	$(document).ready(function() {
		demo.initDashboardPageCharts();
	});
</script>
<script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var recipient = button.data('whatever') 
		var role = button.data('role') 
		var modal = $(this)
		console.log(role)
		modal.find('.modal-body .id').val(recipient)
		modal.find('.modal-body .role').val(role)
	})
</script>
</html>