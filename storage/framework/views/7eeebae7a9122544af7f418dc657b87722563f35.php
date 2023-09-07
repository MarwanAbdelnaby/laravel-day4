

<?php $__env->startSection('title', 'Edit Newspaper'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Newspaper</h2>
    <form action="<?php echo e(route('newspapers.update', $newspaper->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required><?php echo e(old('description')); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update newspaper</button>
    </form>
</div>
</body>
</html>

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

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
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
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3BNABY\Desktop\iti\laravel\day1\resources\views/newspapers/edit.blade.php ENDPATH**/ ?>