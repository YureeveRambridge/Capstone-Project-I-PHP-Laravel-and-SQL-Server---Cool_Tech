<?php 

function truncate($article) {
    $length = abs((int)500);
    if(strlen($article) > $length) {
       $article = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $article);
    }
    return($article);
 }
 ?>

<html>
    <head>
        <title>Cool Tech Homepage</title>
    </head>
    <body>
        <h1>Welcome to the homepage of my Cool Tech!</h1>


        <h2>Articles:</h2>
        
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $url = str_replace(' ', '%20', $article->title);?>

        <a href= <?php echo url("/article/{$url}"); ?>><p><b><?php echo e($article->title); ?></b></p></a>
        
        <p> <?php echo (truncate($article->article)); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </body>
</html><?php /**PATH C:\Users\yuree\Dropbox\practise_Work\php\Cool_Tech\resources\views/home.blade.php ENDPATH**/ ?>