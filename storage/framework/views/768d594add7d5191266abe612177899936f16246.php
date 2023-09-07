

<?php $__env->startSection('title', 'Newspapers'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Newspaper List</h2>
    <a href="<?php echo e(route('newspapers.create')); ?>" class="btn btn-primary">Add New Newspaper</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $newspapers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newspaper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($newspaper->id); ?></td>
                <td><?php echo e($newspaper->name); ?></td>
                <td><?php echo e($newspaper->description); ?></td>
                <td>
                    <a href="<?php echo e(route('newspapers.edit', $newspaper->id)); ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo e(route('newspapers.show', $newspaper->id)); ?>" class="btn btn-info">View</a>
                    <form action="<?php echo e(route('newspapers.destroy', $newspaper->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this newspaper?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<style>
.container {
    margin-top: 20px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #007bff;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th, .table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.table thead {
    background-color: #343a40;
    color: #fff;
}

.btn {
    padding: 5px 10px;
    text-decoration: none;
    color: #fff;
    cursor: pointer;
    border: none;
}

.btn-primary {
    background-color: #007bff;
}
.btn-info {
    background-color: #17a2b8;
}
.btn-danger {
    background-color: #dc3545;
}
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3BNABY\Desktop\iti\laravel\day1\resources\views/newspapers/index.blade.php ENDPATH**/ ?>