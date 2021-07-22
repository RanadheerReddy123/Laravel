<!Doctype html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>ID</td>
<td>First Name</td>
<td>Sur Name</td>
<td>Email</td>
<td>Mobile</td>
<td>Edit</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->firstname }}</td>
<td>{{ $user->surname }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->mobile }}</td>
<td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html>