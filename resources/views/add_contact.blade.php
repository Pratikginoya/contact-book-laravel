<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add_contact</title>
	<link rel="stylesheet" type="text/css" href="css/add_contacts.css">
</head>
<body>
	<form method="post">
		@csrf
	<table class="div1" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center" colspan="2" style="font-size: 28px; font-weight: 900;" height="100"> Add New Contact On Your Contact Book </td>
		</tr>
		<tr><td height="40"></td></tr>
		<tr>
			<td class="inputB">Name : </td>
			<td><input type="text" name="name" placeholder="Enter Name of Contact" class="input" required maxlength="40"></td>
		</tr>

		<tr>
			<td class="inputB">Contact No : </td>
			<td><input type="text" name="contact" maxlength="10" minlength="10" placeholder="Enter Contact Number" class="input" required></td>
		</tr>

		<tr><td height="80"></td></tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="add_contact" value="Add Contact" class="button"></td>
		</tr>
		<tr><td colspan="2" align="center" style="font-size: 15px; color: #a8a8a8;" height="100">-------- OR -------</td></tr>
		<tr>
			<td colspan="2" align="center"><a href="/home" class="button2"> Back to Home </a></td>
		</tr>

		
	</table>
	</form>
</body>
</html>