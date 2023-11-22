<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit_Page</title>
	<link rel="stylesheet" type="text/css" href="css/editss.css">
</head>
<body>

@foreach($arr as $user_detail)
<form method="post">
	@csrf
	<table class="div1" border="0">
		<tr>
			<td class="inputB">Name : </td>
			<td><input type="name" name="name" placeholder="Name" size="35" maxlength="25" class="input" value="{{$user_detail->name}}" required></td>
		</tr>

		<tr><td width="350" height="10"><br></td></tr>

		<tr>
			<td class="inputB">Email : </td>
			<td><input type="email" name="email" placeholder="Email" size="35" class="input" value="{{$user_detail->email}}" required></td>
		</tr>

		<tr><td width="350" height="10"><br></td></tr>

		<tr>
			<td class="inputB">City : </td>
			<td>
				<select name="city" class="inputA" required>
					<option disabled>-Select City-</option>
					<option {{($user_detail->city=='Ahmedabad')? "selected":""}}>Ahmedabad</option>
					<option {{($user_detail->city=='Surat')? "selected":""}}>Surat</option>
					<option {{($user_detail->city=='Vadodara')? "selected":""}}>Vadodara</option>
					<option {{($user_detail->city=='Rajkot')? "selected":""}}>Rajkot</option>
					<option {{($user_detail->city=='Bhavnagar')? "selected":""}}>Bhavnagar</option>
					<option {{($user_detail->city=='Jamnagar')? "selected":""}}>Jamnagar</option>
					<option {{($user_detail->city=='Gandhinagar')? "selected":""}}>Gandhinagar</option>
					<option {{($user_detail->city=='Junagadh')? "selected":""}}>Junagadh</option>
					<option {{($user_detail->city=='Gandhidham')? "selected":""}}>Gandhidham</option>
					<option {{($user_detail->city=='Anand')? "selected":""}}>Anand</option>
					<option {{($user_detail->city=='Navsari')? "selected":""}}>Navsari</option>
					<option {{($user_detail->city=='Morabi')? "selected":""}}>Morabi</option>
					<option {{($user_detail->city=='Nadiad')? "selected":""}}>Nadiad</option>
					<option {{($user_detail->city=='Surendranagar')? "selected":""}}>Surendranagar</option>
					<option {{($user_detail->city=='Bharuch')? "selected":""}}>Bharuch</option>
					<option {{($user_detail->city=='Mehsana')? "selected":""}}>Mehsana</option>
					<option {{($user_detail->city=='Bhuj')? "selected":""}}>Bhuj</option>
					<option {{($user_detail->city=='Porbandar')? "selected":""}}>Porbandar</option>
					<option {{($user_detail->city=='Palanpur')? "selected":""}}>Palanpur</option>
					<option {{($user_detail->city=='Valsad')? "selected":""}}>Valsad</option>
					<option {{($user_detail->city=='Vapi')? "selected":""}}>Vapi</option>
					<option {{($user_detail->city=='Gondal')? "selected":""}}>Gondal</option>
					<option {{($user_detail->city=='Veraval')? "selected":""}}>Veraval</option>
					<option {{($user_detail->city=='Godhra')? "selected":""}}>Godhra</option>
					<option {{($user_detail->city=='Patan')? "selected":""}}>Patan</option>
					<option {{($user_detail->city=='Kalol')? "selected":""}}>Kalol</option>
					<option {{($user_detail->city=='Dahod')? "selected":""}}>Dahod</option>
					<option {{($user_detail->city=='Botad')? "selected":""}}>Botad</option>
					<option {{($user_detail->city=='Amreli')? "selected":""}}>Amreli</option>
					<option {{($user_detail->city=='Deesa')? "selected":""}}>Deesa</option>
					<option {{($user_detail->city=='Jetpur')? "selected":""}}>Jetpur</option>
					<option {{($user_detail->city=='Other')? "selected":""}}>Other</option>
				</select>
			</td>
		</tr>

		<tr><td width="350" height="50"><br></td></tr>

		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="save" value="Submit" class="button">
				<a href="/change_pass" class="button">Change Password</a>
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
@endforeach

</body>
</html>

