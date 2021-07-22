<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<div align="center">
            <h2 align="center">Student Registration</h2>
        <button class="btn btn-primary" type="submit" name="std-reg" onclick="/view-records">Student List</button>
        </div>
        
        <form align="center" action="submit" method="post">
            Firstname :<br><input type="text" name="firstname"><br>
            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color:red"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br><br>
            Surname :<br><input type="text" name="surname"><br>
            <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color:red"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br><br>
            Email:<br><input type="text" name="email"><br>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color:red"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br><br>
            Mobile:<br><input type="mobile" name="mobile"><br>
            <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color:red"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br><br>
            <?php echo e(@csrf_field()); ?>

            <br><input type="submit" value="Register">
        </form>
</body>
</html><?php /**PATH C:\laravel\resources\views/stud_create.blade.php ENDPATH**/ ?>