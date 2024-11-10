<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
<h1>Add New Employee</h1>
<?php if($errors->any()): ?>
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('employees.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Code:</label>
    <input type="text" name="code" required><br>
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <label>Gender:</label>
    <input type="text" name="gender" required><br>
    <label>Birth Year:</label>
    <input type="number" name="birth_year" required><br>
    <label>Education:</label>
    <input type="text" name="education" required><br>
    <label>Specialty:</label>
    <input type="text" name="specialty" required><br>
    <label>Registration Date:</label>
    <input type="date" name="registration_date" required><br>
    <button type="submit">Add</button>
</form>
</body>
</html>
<?php /**PATH C:\Users\Wifit\OneDrive\Рабочий стол\Універ\my-laravel-project\resources\views/employees/create.blade.php ENDPATH**/ ?>