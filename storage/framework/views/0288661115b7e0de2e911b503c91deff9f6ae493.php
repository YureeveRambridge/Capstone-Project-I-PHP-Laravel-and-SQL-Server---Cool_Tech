<!-- Page displays a post and all it relevant details -->

<!-- Imports Functions from the components folder in slugConverter.php file-->
<?php echo $__env->make('components.slugConverter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!doctype html>
<html>

<head>

    <!-- Loops through the articles table returns the selected article's title -->
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <title><?php echo e($article -> title); ?></title>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <link rel="stylesheet" href="/app.css">
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

    <!-- Loop through the article with the given id, and display the results-->
    <div class="articleItem3">

        <!-- Loops through the articles table returns the selected article's title, content, category, name, tag, id, and date. -->
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="articleDisplay">
            <!-- Title -->
            <h2 style="text-align: center;"><?php echo e($article -> title); ?></h2>

            <!-- Category link -->
            <p style="text-align: center;"><?php echo e($article -> content); ?></p>

            <div style="border-style: dotted; border-color:black; width:fit-content; text-align: center">

                <p>
                    <b>Category: </b>
                    <a href=" <?php echo e(url('/category', [$article->name])); ?> "><?php echo e(categoryName($article -> name)); ?></a>
                </p>

                <!-- Tag link -->
                <p><b>Tags:</b>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href=" <?php echo e(url('/tag', [$tag->name])); ?> ">#<?php echo e(tagName($tag->name)); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>

                <!-- Date -->
                <p>
                    <b>Published On:</b> <?php echo e($article -> date_published); ?>

                </p>

                <!-- ID -->
                <p>
                    <b>ID:</b> <?php echo e($article -> article_id); ?>

                </p>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Cookies disclaimer and footer display -->
    <div>
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

</html><?php /**PATH C:\Users\yuree\OneDrive\Desktop\Cool_Tech\resources\views/article.blade.php ENDPATH**/ ?>