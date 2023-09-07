<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view newspaper</title>
<style>/* Global styles */
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
    
    /* Heading styles */
    h2 {
        color: #007bff;
    }
    
    /* Button styles */
    .btn {
        text-decoration: none;
        cursor: pointer;
    }
    
    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }
    
    /* Margin for the back button */
    .mb-3 {
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
    

    <?php $__env->startSection('title'); ?>
    <?php echo e($newspaper->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <div class="container">
        <h2 class="text-primary"><?php echo e($newspaper->name); ?></h2>
        <p><strong>Description:</strong> <?php echo e($newspaper->description); ?></p>
        <a href="<?php echo e(route('newspapers.index')); ?>" class="btn btn-primary mb-3">Back to Newspaper List</a>
    </div>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3BNABY\Desktop\iti\laravel\day1\resources\views/newspapers/show.blade.php ENDPATH**/ ?>