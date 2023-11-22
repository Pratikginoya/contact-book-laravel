<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change_pass</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/editss.css')}}">
</head>
<body>

<form method="post">
	@csrf
	<table class="div1" border="0">

		<tr>
			@if($msg=='')
				{{$msg}}
			@else
				<td colspan="2" class="fontE">&nbsp;&nbsp; {{$msg}}</td>
			@endif

			@if($msg2=='')
				{{$msg2}}
			@else
				<td colspan="2" class="fontZ">&nbsp;&nbsp; {{$msg2}}</td>
			@endif
		</tr>

		<tr><td width="350" height="30"><br></td></tr>

		<tr>
			<td class="inputB">Current Password : </td>
			<td><input type="password" name="curr_pass" placeholder="Enter Current Password" minlength="5" maxlength="10" size="35" class="input" required></td>
		</tr>

		<tr><td width="350" height="10"><br></td></tr>

		<tr>
			<td class="inputB">New Password : </td>
			<td><input type="password" name="password" placeholder="Enter New Password (5 to 10 digit)" minlength="5" maxlength="10" size="35" class="input" required></td>
		</tr>

		<tr><td width="350" height="10"><br></td></tr>

		<tr>
			<td class="inputB">Re-Enter New Password : </td>
			<td><input type="password" name="password2" placeholder="Re-Enter New Password (5 to 10 digit)" minlength="5" maxlength="10" size="35" class="input" required></td>
		</tr>

		<tr><td width="350" height="50"><br></td></tr>

		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="save" value="Submit" class="button">
			</td>
		</tr>
		<tr><td width="350" height="20"><br></td></tr>
		<tr>
			<td colspan="2" align="center">
				<a href="/home" class="button">Back to Home</a>
			</td>
		</tr>
	</table>	
</form>

</body>
</html>

