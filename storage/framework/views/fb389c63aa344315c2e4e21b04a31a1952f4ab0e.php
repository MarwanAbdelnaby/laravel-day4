<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
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
</head>
<body>
    

<?php $__env->startSection('title'); ?>
    Books
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Book List</h2>
        <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">Add New Book</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->id); ?></td>
                    <td><?php echo e($book->name); ?></td>
                    <td>$<?php echo e(number_format($book->price, 2)); ?></td>
                    <td><?php echo e($book->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('books.show', $book->id)); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3BNABY\Desktop\iti\laravel\day1\resources\views/books/index.blade.php ENDPATH**/ ?>