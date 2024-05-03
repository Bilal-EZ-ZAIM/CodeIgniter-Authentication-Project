<!-- STYLES -->

<?php $this->extend("layout/layout") ?>



<?php $this->section("title") ?>
Login
<?php $this->endSection("title") ?>


<?php $this->section("main") ?>


<style>
    .login {
        height: 60vh;
    }

    .login .form {
        margin: 0 auto;
        margin-top: 20vh;
    }
</style>


<div class="container login mx-auto">


    <div class="max-w-md mx-auto my-10 form bg-white p-5 rounded-md shadow-md">
        <h2 class="text-2xl font-bold text-center mb-5">Login</h2>
        <?php if (session()->has('errors')) : ?>
            <div class="mb-4 text-red-500">
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
        <form action="<?= base_url('/auth/login') ?>" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" value="<?= old('email') ?>" id="email" placeholder="Enter your email" class="form-input border border-gray-400 rounded-md w-full px-4 py-2">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" name="password" value="<?= old('password') ?>" id="password" placeholder="Enter your password" class="form-input border border-gray-400 rounded-md w-full px-4 py-2">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-md">Login</button>
            </div>
        </form>
    </div>
</div>

<?php $this->endSection("main") ?>