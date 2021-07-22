<!DOCTYPE html>
<html>
<head>
<title>Student Management | Edit</title>
</head>
<body>
<form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
<table>
<tr>
<td>First Name</td>
<td>
<input type = 'text' name = 'firstname'
value = '<?php echo $users[0]->firstname; ?>'/> </td>
</tr>
<tr>
<td>Sur Name</td>
<td>
<input type = 'text' name = 'surname'
value = '<?php echo $users[0]->surname; ?>'/>
</td>
</tr>
<tr>
<td>Email</td>
<td>
<input type = 'text' name = 'email'
value = '<?php echo $users[0]->email; ?>'/>
</td>
</tr>
<tr>
<td>Mobile</td>
<td>
<input type = 'number' name = 'mobile'
value = '<?php echo $users[0]->mobile; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update student" />
</td>
</tr>
</table>
</form>
</body>
</html>