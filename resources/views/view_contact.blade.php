<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View_contact</title>
	<link rel="stylesheet" type="text/css" href="css/view_contacts.css">
</head>
<body>

	<table cellpadding="0" cellspacing="0" class="body" border="0" width="100%">

		<tr>
			<td align="center" colspan="5" style="font-size: 28px; font-weight: 900;" height="80"> View or Manage Your Contact Book </td>
		</tr>
		<tr><td height="40"></td></tr>
	<form method="get">
		@csrf
		<tr>
			<td></td>
			<td colspan="3"><input type="text" name="search_text" placeholder="Enter Name to Search..." required class="search"></td>
			<td><input type="submit" name="search" value="Search" class="button"></td>
		</tr>
	</form>
	<form method="post">
		@csrf
		<tr><td height="40"></td></tr>
		<tr>
			<th align="center"><input type="submit" name="delete_checked" value="Detele" class="submit"> </th>
			<th class="inputA">Name</th>
			<th class="inputA">Contact No</th>
			<th class="inputA"></th>
			<th class="inputA"></th>
		</tr>


	@foreach($arr as $view_data)
		<tr>
			<td align="center"><input type="checkbox" name="checkbox[]" value="{{$view_data->id}}"> </td>
			<td ><div class="inputB">{{$view_data->name}}</div></td>
			<td align="center" ><div class="inputC">{{$view_data->contact}}</div></td>
			<td align="center"><a href="/edit_contact/{{$view_data->id}}" class="button">Edit</a> </td>
			<td align="center"><a href="/view_contact/{{$view_data->id}}" class="button">Delete</a> </td>
		</tr>
	@endforeach
	</form>

		<tr><td height="80"></td></tr>
		<tr>
			<td colspan="5" align="center"><a href="/add_contact" class="button3"> Add New Contact </a></td>
		</tr>
		<tr><td colspan="5" align="center" style="font-size: 15px; color: black;" height="80">-------- OR -------</td></tr>
		<tr>
			<td colspan="5" align="center" height="50"><a href="/home" class="button2"> Back to Home </a></td>
		</tr>
		<tr>
			<td colspan="5" class="pages">
				{{$arr->links('/pagination')}}
			</td>
		</tr>
	</table>

</body>
</html>