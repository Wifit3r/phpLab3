<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
<h1>Employees List</h1>
<a href="<?php echo e(route('employees.create')); ?>">Add New Employee</a>
<?php if(session('success')): ?>
    <div><?php echo e(session('success')); ?></div>
<?php endif; ?>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth Year</th>
        <th>Education</th>
        <th>Specialty</th>
        <th>Registration Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($employee->id); ?></td>
            <td><?php echo e($employee->code); ?></td>
            <td><?php echo e($employee->name); ?></td>
            <td><?php echo e($employee->gender); ?></td>
            <td><?php echo e($employee->birth_year); ?></td>
            <td><?php echo e($employee->education); ?></td>
            <td><?php echo e($employee->specialty); ?></td>
            <td><?php echo e($employee->registration_date); ?></td>
            <td>
                <a href="<?php echo e(route('employees.edit', $employee->id)); ?>">Edit</a>
                <form action="<?php echo e(route('employees.destroy', $employee->id)); ?>" method="POST" style="display:inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html>
<?php /**PATH C:\Users\Wifit\OneDrive\Рабочий стол\Універ\my-laravel-project\resources\views/employees/index.blade.php ENDPATH**/ ?>