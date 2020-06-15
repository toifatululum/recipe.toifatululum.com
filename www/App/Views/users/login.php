<?php
if(!empty($_SESSION['status']) && $_SESSION['status']=="login"){
	header("location:" . BASE . "/");
}
?>

<div class="row no-gutters">
	<div class="col-md-6">
		<div class="login-wrapper" style="background: url('<?php echo BASE; ?>/assets/images/login.png'); "></div>
	</div>
	<?php if(!empty($_SESSION['username'])) echo $_SESSION['username']  ?>
	<div class="col-md-6">
		<div class="d-flex justify-content-between align-items-center flex-column login-wrapper2" >
			<div class="d-flex justify-content-end text-right w-100 mb-3">Don't have an account?  <a href="<?php echo BASE; ?>/index/register">Register</a></div>
			<form class="login-form" method="post" action="<?php echo BASE; ?>/index/action_login" onSubmit="return validasi()">
				<div>
					<h2>Welcome to UlumKitchen</h2>
					<p>We help you to serve your favorite food in your kitchen</p>
				</div>
				<div class="form-group" width="100%">
					<label for="exampleInputEmail1">Email address</label>
					<input id="email" width="100%" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input id="password" type="password" name="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<div></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
