<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php echo e(session('status')); ?>

</div>
<?php elseif(session('failed')): ?>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php echo e(session('failed')); ?>

</div>
<?php endif; ?>
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>First Name</td>
	<td><input type='text' name='firstname' /></td>
	<tr>
	<td>Sur Name</td>
	<td><input type="text" name='surname'/></td>
	</tr>
	<tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name='email'/></td>
	</tr>
    <tr>
	<td>Mobile</td>
	<td><input type="text" name='mobile'/></td>
	</tr>
	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add student"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html><?php /**PATH C:\laravel-5.6\laravel\resources\views/stud_insert_view.blade.php ENDPATH**/ ?>