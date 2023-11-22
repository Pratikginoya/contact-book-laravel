<?php 
include_once 'connection.php';

$edit = $_SESSION['edit'];

$id = $edit['ID'];
$sql_select = "select * from `contact` where `ID`='$id'";
$data = mysqli_query($con,$sql_select);
$row = mysqli_fetch_assoc($data);

if (isset($_POST['save']))
{
	$name = $_POST['name'];
	$contact = $_POST['contact'];

	$sql_update = "update `contact` set `Name`='$name',`Contact`='$contact' where `ID`='$id'";
	mysqli_query($con,$sql_update);

	header("location:view_contact.php");
}


 ?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add_contact</title>
	<link rel="stylesheet" type="text/css" href="css/edit_contactt.css">
</head>
<body>
	<form method="post">
	<table class="div1" border="0">
		<tr>
			<td align="center" colspan="2" style="font-size: 28px; font-weight: 900;" height="100"> Edit Below Contact Details </td>
		</tr>
		<tr><td height="40"></td></tr>
		<tr>
			<td class="inputB">Name : </td>
			<td><input type="text" name="name" placeholder="Edit Name of Contact" class="input" required value="<?php echo @$row['Name']; ?>"></td>
		</tr>

		<tr>
			<td class="inputB">Contact No : </td>
			<td><input type="text" name="contact" maxlength="10" placeholder="Edit Contact Number" class="input" required value="<?php echo @$row['Contact']; ?>"></td>
		</tr>

		<tr><td height="80"></td></tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="save" value="Submit" class="button"></td>
		</tr>
		<tr><td colspan="2" align="center" style="font-size: 15px; color: #a8a8a8;" height="100">-------- OR -------</td></tr>
		<tr>
			<td colspan="2" align="center"><a href="view_contact.php" class="button2"> Back to View Contact </a></td>
		</tr>

		
	</table>
	</form>
</body>
</html>


<!--  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add_contact</title>
	<link rel="stylesheet" type="text/css" href="css/add_contact.css">
</head>
<body>
	<form method="post">
	<table class="div1" border="0">
		<tr>
			<td align="center" colspan="2" style="font-size: 28px; font-weight: 900;" height="100"> Enter/Remove Your Additional Contact No. Below </td>
		</tr>
		<tr><td height="40"></td></tr>
		<tr>
			<td class="inputB">Contact 1 : </td>
			<td><input type="text" name="contact" maxlength="10" value="<?php echo @$row['Contact']; ?>" placeholder="Your main contact" class="input" required></td>
		</tr>

		<tr>
			<td class="inputB">Contact 2 : </td>
			<td><input type="text" name="contact2" maxlength="10" value="<?php echo @$row['Contact2']; ?>" placeholder="Add 2nd contact" class="input"></td>
		</tr>

		<tr>
			<td class="inputB">Contact 3 : </td>
			<td><input type="text" name="contact3" maxlength="10" value="<?php echo @$row['Contact3']; ?>" placeholder="Add 3nd contact" class="input"></td>
		</tr>

		<tr>
			<td class="inputB">Contact 4 : </td>
			<td><input type="text" name="contact4" maxlength="10" value="<?php echo @$row['Contact4']; ?>" placeholder="Add 4nd contact" class="input"></td>
		</tr>
		<tr><td height="40"></td></tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="save" value="Add/Edit Contact" class="button"></td>
		</tr>
		<tr><td colspan="2" align="center" style="font-size: 15px; color: #a8a8a8;" height="100">-------- OR -------</td></tr>
		<tr>
			<td colspan="2" align="center"><a href="website_home.php" class="button2"> Back to Home </a></td>
		</tr>

		
	</table>
	</form>
</body>
</html> -->