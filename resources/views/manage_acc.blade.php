<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage_Account</title>
	<link rel="stylesheet" type="text/css" href="css/manage_accc.css">
</head>
<body>
<form method="post">
<table border="0" align="center" class="div1">

@foreach($arr as $login_user)
	<tr>
		<td colspan="2" align="center" width="400" class="div3" height="200">
			<div class="div2">
					<img class="img" src="css/12.png">
			</div>
			<div>
				<h2 align="center">{{$login_user->name}}</h2>
				<p class="p1" align="center">{{$login_user->city}}</p>
			</div>
		</td>
	</tr>
	<tr><td height="7"></td></tr>
	<tr>
		<td colspan="2" class="div4">{{$login_user->name}}</td>
	</tr>
	<tr><td height="7"></td></tr>
	<tr>
		<td colspan="2" class="div5">{{$login_user->email}}</td>
	</tr>
	<tr><td height="7"></td></tr>
	<tr>
		<td colspan="2" class="div7">{{$login_user->city}}</td>
	</tr>
	<tr><td height="20"></td></tr>
	<tr>
		<td><a href="/edit" class="button">Edit</a></td>
		<td><a href="/home" class="button">Home</a></td>
	</tr>
@endforeach

</table>
</form>
</body>
</html>




