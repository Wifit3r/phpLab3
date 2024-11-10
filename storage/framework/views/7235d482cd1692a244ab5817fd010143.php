<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
<h1>Edit Employee</h1>
<?php if($errors->any()): ?>
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('employees.update', $employee->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label>Code:</label>
    <input type="text" name="code" value="<?php echo e($employee->code); ?>" required><br>
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo e($employee->name); ?>" required><br>
    <label>Gender:</label>
    <input type="text" name="gender" value="<?php echo e($employee->gender); ?>" required><br>
    <label>Birth Year:</label>
    <input type="number" name="birth_year" value="<?php echo e($employee->birth_year); ?>" required><br>
    <label>Education:</label>
    <input type="text" name="education" value="<?php echo e($employee->education); ?>" required><br>
    <label>Specialty:</label>
    <input type="text" name="specialty" value="<?php echo e($employee->specialty); ?>" required><br>
    <label>Registration Date:</label>
    <input type="date" name="registration_date" value="<?php echo e($employee->registration_date); ?>" required><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
<?php /**PATH C:\Users\Wifit\OneDrive\Рабочий стол\Універ\my-laravel-project\resources\views/employees/edit.blade.php ENDPATH**/ ?>