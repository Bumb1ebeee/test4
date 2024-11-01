<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Новая порода</p>
<form action="/newBreed" method="post">
    <?php echo csrf_field(); ?>
    <label for="name">Порода</label>
    <input type="text" name="name">

    <button>Зарегистрировать</button>
</form>
<table>
    <tr>
        <th>номер</th>
        <th>Кличка</th>
        <th>возраст</th>
        <th>Порода</th>
        <th>Окрас</th>
        <th>Хозяин</th>
    </tr>
<?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($member->id); ?></td>
            <td><?php echo e($member->name); ?></td>
            <td><?php echo e($member->age); ?></td>
            <td><?php echo e($member->breed->breed); ?></td>
            <td><?php echo e($member->color); ?></td>
            <td><?php echo e($member->user->email); ?></td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\localhost\test3\resources\views/index.blade.php ENDPATH**/ ?>