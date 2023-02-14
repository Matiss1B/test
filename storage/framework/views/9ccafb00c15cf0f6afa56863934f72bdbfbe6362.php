<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <title>Document</title>
    </head>
    <body>
      <h1>Hello</h1>
      <form action="<?php echo e(route('create')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('POST'); ?>;
          <input type="text" name="title" id="title">
          <input type="text" name="description" id="description">
          <button type="submit">Submit</button>
      </form>
      <form action="api/posts/update/1" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>;
          <input type="text" name="Utitle" id="Utitle">
          <input type="text" name="Udescription" id="Udescription">
          <button type="submit">Edit</button>
      </form>
    </body>
<script src="../resources/js/mainScript.js"></script>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/homepage.blade.php ENDPATH**/ ?>