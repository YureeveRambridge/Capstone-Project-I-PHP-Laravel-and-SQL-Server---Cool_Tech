<!-- Home page displays to posts  -->
<!doctype html>
<html>

<head>
    <!-- Tab title -->
    <title>Cool Tech</title>

    <link rel="stylesheet" href="/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

	<!-- Page heading -->
	<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => []]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <!-- Grid container -->
    <div class="item3">

        <!-- Sub Heading -->
        <h2 class="homeH2">Posts:</h2>

        <!-- Loop through the database items, and print out their title, a hyperlink, and the first paragraph. -->
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <!-- Card Display Style -->
        <div class="w3-card-4">

            <!-- Post title with hyperlink -->
            <header class="w3-container w3-grey">
                <h1>
                    <a href=" <?php echo e(url('/article', [$article->article_id])); ?> "><?php echo e($article -> title); ?></a>
                </h1>
            </header>

            <!-- Post Content -->
            <div class="w3-container">
                <p class="articleP"><?php echo e($article -> content); ?></p>
            </div>

            <!-- Displays date created and article id -->
            <footer class="w3-container w3-grey" style="word-spacing: 400px;">
                Date:<?php echo e($article -> date_published); ?>

                ID:<?php echo e($article -> article_id); ?>

            </footer>
        </div>
        <br>
        <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Cookies disclaimer and footer display -->
    <div class="item5">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => []]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>

</body>

</html><?php /**PATH C:\Users\yuree\OneDrive\Desktop\Cool_Tech\resources\views/home.blade.php ENDPATH**/ ?>