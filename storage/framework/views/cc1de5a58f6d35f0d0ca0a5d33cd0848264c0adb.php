<?php $__env->startSection('content'); ?>
    <div class="homeView flex col w-100vh h-100vh alignCenter justifyCenter ">
        <?php if(\Session::has('message')): ?>
            <h1><?php echo e(\Session::get('message')); ?></h1>
        <?php endif; ?>
            <div class="auth-container flex gap2">
                <div class="hide-box w-50 h-50">kdkkk</div>
                <form action="<?php echo e(route('signup')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="auth-container-register flex col gap2 pad2rem">
                        <h2>Register</h2>
                        <div class="input-group register-input-name flex col">
                            <label for="uname">Name</label>
                            <input type="text" placeholder="Enter Username" name="register-name" id = "name">
                            <?php if($errors->has('register-name')): ?>
                                <span><?php echo e($errors->first('register-name')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="input-group register-input-email flex col">
                            <label for="psw">Email</label>
                            <input type="email" placeholder="Enter Email" name="register-email" id = "email">
                        </div>
                        <div class="input-group register-input-pass flex col ">
                            <label for="psw">Password</label>
                            <input type="password" placeholder="Enter Password" name="register-password" id = "password">
                            <?php if($errors->has('register-password')): ?>
                                <span><?php echo e($errors->first('register-password')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="auth-container-submit flex col gap10px">
                            <button type="submit">Register</button>
                            <div class="login-btn flex gap10px">
                                Have an account?
                                <a href = "<?php echo e(route('home')); ?>">Login</a>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="<?php echo e(route('postlogin')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="auth-container-login flex col gap2 pad2rem">
                    <h2>Login</h2>
                    <div class="input-group login-input-name flex col">
                        <label for="uname">Email</label>
                        <input type="text" placeholder="Enter Username" name="email" id = "email">
                        <?php if($errors->has('email')): ?>
                        <span><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-group login-input-pass flex col">
                        <label for="psw">Password</label>
                        <input type="password" placeholder="Enter Password" name="password" id = "password">
                        <?php if($errors->has('password')): ?>
                        <span><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                        <div class="remember flex gap10px marT10px">
                            <input type = "checkbox">
                            <p>Remember me!</p>
                        </div>
                    </div>
                    <div class="auth-container-submit flex col gap10px">
                        <button type="submit">Login</button>
                        <div class="register-btn flex gap10px">
                            Don't have an account?
                        <a href = "<?php echo e(route('register')); ?>">Register</a>
                        </div>
                    </div>
                    <div class="socialite flex gap2 justifyCenter">
                        <a href = "<?php echo e(route('google-auth')); ?>"><i id = "instagram-icon" class="instagram-icon fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href = "<?php echo e(route('facebook-auth')); ?>"><i id = "facebook-icon" class="facebook-icon fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                </form>
            </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/home.blade.php ENDPATH**/ ?>