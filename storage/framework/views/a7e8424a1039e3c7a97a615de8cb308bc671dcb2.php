<!DOCTPE html>
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
<td>Delete</td>
</tr>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($user->id); ?></td>
<td><?php echo e($user->firstname); ?></td>
<td><?php echo e($user->surname); ?></td>
<td><?php echo e($user->email); ?></td>
<td><?php echo e($user->mobile); ?></td>
<td><a href = 'delete/<?php echo e($user->id); ?>'>Delete</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\laravel\resources\views/stud_delete_view.blade.php ENDPATH**/ ?>