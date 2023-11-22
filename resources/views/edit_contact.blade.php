<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit_contact</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/edit_contactt.css')}}">
</head>
<body>
@foreach($arr as $update)
	<form method="post">
	@csrf
	<table class="div1" border="0">
		<tr>
			<td align="center" colspan="2" style="font-size: 28px; font-weight: 900;" height="100"> Edit Below Contact Details </td>
		</tr>
		<tr><td height="40"></td></tr>
		<tr>
			<td class="inputB">Name : </td>
			<td><input type="text" name="name" placeholder="Edit Name of Contact" maxlength="40" class="input" required  value="{{$update->name}}"></td>
		</tr>

		<tr>
			<td class="inputB">Contact No : </td>
			<td><input type="text" name="contact" maxlength="10" minlength="10" placeholder="Edit Contact Number" class="input" required value="{{$update->contact}}"></td>
		</tr>

		<tr><td height="80"></td></tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="save" value="Submit" class="button"></td>
		</tr>
		<tr><td colspan="2" align="center" style="font-size: 15px; color: #a8a8a8;" height="100">-------- OR -------</td></tr>
		<tr>
			<td colspan="2" align="center"><a href="/view_contact" class="button2"> Back to View Contact </a></td>
		</tr>
	</table>
	</form>
@endforeach
</body>
</html>
