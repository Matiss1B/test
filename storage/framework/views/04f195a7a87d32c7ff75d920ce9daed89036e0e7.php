<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="path/to/jQuery-sidebar.min.js"></script>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <link rel="stylesheet" href="../resources/css/style.css">
        <title>Astrix</title>
    </head>
    <body>
            <?php echo $__env->yieldContent("content"); ?>
    </body>
    <script src ="../resources/js/script.js"></script>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>