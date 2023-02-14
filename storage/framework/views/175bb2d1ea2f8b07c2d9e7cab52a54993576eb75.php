<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('signup')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="container">
            <h1>Register</h1>
            <label for="uname"><b>Name</b></label>
            <input type="text" placeholder="Enter Username" name="name" id = "name" required>
            <?php if($errors->has('name')): ?>
            <span><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
            <label for="psw"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id = "email">
            <?php if($errors->has('email')): ?>
            <span><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id = "password">
            <?php if($errors->has('password')): ?>
            <span><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
            <button type="submit">Register</button>
            <a href = "<?php echo e(route('home')); ?>">Login</a>

        </div>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/register.blade.php ENDPATH**/ ?>