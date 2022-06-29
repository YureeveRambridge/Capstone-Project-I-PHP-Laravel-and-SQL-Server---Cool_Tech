<html>
    <head>
        <title>Cool Blog Homepage</title>
    </head>
    <body>
        <h1>Welcome to the homepage of my cool blog!</h1>


        <h2>Blog posts:</h2> 

            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <p>Category: <?php echo e($test->category); ?></p>

                <h3><?php echo e($test->title); ?></h3>
                    <p>Tags: <?php echo e($test->tags); ?></p>
                    <p><?php echo e($test->article); ?></p>
                    <p>Created date: <?php echo e($test->created_date); ?></p>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </body>
</html><?php /**PATH C:\Users\yuree\Dropbox\Yureeve Rambridge-90496\3. Advanced Web Development with the MERN Stack\Task 10\Cool_Tech\resources\views/category.blade.php ENDPATH**/ ?>