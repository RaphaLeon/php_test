<?php include("controller/login.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>login</title>
	<link href="resources/css/bootstrap.min.css" rel="stylesheet" />
	<script src="resources/js/jquery.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#mainForm").submit(function(){
				if($("#txtLogin").val() === "" || $("#txtPassword").val() === ""){
					return false;
				}
			});
		});
		function clean(){
			$("#txtLogin").val("").focus();
			$("#txtPassword").val("");
			$("#lblMessage").text("");
		}	
	</script>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form id="mainForm" action="" method="post">
					<div class="panel panel-primary" style="margin-top: 30%;">
						<div class="panel-heading text-center">
							<h3>Login</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="txtLogin">User:</label>
								<input id="txtLogin" name="login"
									class="form-control" autofocus="true"></input>
							</div>
							<div class="form-group">
								<label for="txtPassword">Password:</label>
								<input id="txtPassword" type="password" name="password"
									class="form-control"></input>
							</div>
							<div align="center">
								<span id="lblMessage" style="color: rgb(255,0,0); font-weight: bold;"><?php echo $message;?></span>
							</div>
						</div>
						<div class="panel-footer text-center">
							<input type="submit" value="Aceptar"
								class="btn btn-primary"></input>
							<input type="button" onclick="clean();" class="btn btn-danger" value="Cancelar"></input>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>
