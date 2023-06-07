<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value="" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>username</th>
						<th>emailid</th>
						<th>phonenumber</th>
						<th>password</th>
						<th>cpassword</th>
						<th>gender</th>
					</tr>
					<tr>
						<td>mitu</td>
						<td>mitu@gmail.com</td>
						<td>01718956431</td>
						<td>9998</td>
						<td>9998</td>
						<td>Female</td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>
</body>
</html>