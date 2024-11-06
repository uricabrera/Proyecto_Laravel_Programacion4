<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion to do list en Laravel</title>
</head>
<body>
    <form action="<?php echo e(url('/')); ?>" method="post">
    <?php echo csrf_field(); ?>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="agregar tarea">
    </form>

    <table border="1">
        <tr>
            <td>Nombre de la tarea</td>
            <td>eliminar tarea</td>
        </tr>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($task->nombre); ?></td>
            <td>
                <form action="<?php echo e(route('task.destroy',$task->id)); ?>" method='post'>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value='x'>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH D:\Xampp\htdocs\Proyect_uch\resources\views/tareas/index.blade.php ENDPATH**/ ?>