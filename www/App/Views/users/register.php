<div class="row no-gutters">
	<div class="col-md-6">
		<div class="login-wrapper" style="background: url('<?php echo BASE; ?>/assets/images/login.png'); "></div>
	</div>
	<div class="col-md-6">
		<div class="d-flex justify-content-between align-items-center flex-column login-wrapper2" >
			<div class="d-flex justify-content-end text-right w-100 mb-3">
				<span class="mr-2">Have an account?</span>
				<a href="<?php echo BASE; ?>/index/login"> Login</a>
			</div>
			<form class="login-form" method="post" action="<?php echo BASE; ?>/index/action_register" onSubmit="return validasi()">
				<div>
					<h2>Welcome to UlumKitchen</h2>
					<p>We help you to serve your favorite food in your kitchen</p>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input width="100%" type="text" class="form-control" name="username" id="username">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input width="100%" type="text" class="form-control" name="name" id="name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input width="100%" type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password Confirmation</label>
					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<div></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var username = document.getElementById("username").value;
		var password_confirmation = document.getElementById("password_confirmation").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="" && password_confirmation!="" && email!="") {
			return true;
		}else{
			alert('Pastikan semuanya terisi!');
			return false;
		}
	}

</script>
