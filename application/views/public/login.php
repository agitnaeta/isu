<!DOCTYPE html>
<html>
<head>
	<title><?=$siteName;?></title>
</head>
<body>
<div class="col-md-4"></div>
<div class="col-md-4">
	<form method="post" action="<?php echo base_url("login/auth");?>">
		<div class="panel panel-default">
		<div class="panel-heading">
			<?=$siteName;?> | Login
		</div>
		<div class="panel-body">
			<label>Username</label>
			<input class="form-control" name="username" id="username" >
			<label>Password</label>
			<input class="form-control" name="password" id="password" type="password">
		</div>
		<div class="panel-footer">
			<button class="btn btn-primary"> 
				<i class="fa fa-sign-in"></i>	Login 
			</button>
			<button class="btn btn-default">
				Cancel
			</button>
		</div>
	</div>
	</form>
</div>
<div class="col-md-4"></div>
</body>
</html>