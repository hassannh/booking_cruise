<!-- <span for="name">Name<sup>*</sup></span>
                        <input type="text" name="userName" value="<?= $data['name'] ?>" class="form-control form-control-lg <?= (!empty($data['name_err']) ? 'is-invalid' : '') ?>">
                        <span class="invalid-feedback"><?= $data['name_err'] ?></span> -->


<form action="<?php echo URLROOT; ?>/usersController/register" method="POST">
    <div class="shadow-xl p-10 bg-white max-w-xl mx-auto mt-8 rounded">
        <h1 class="text-4xl font-black mb-4">signUp</h1>
        <div class="mb-4 relative">
            <span for="name">Name<sup>*</sup></span>
            <input value="<?= $data['name'] ?>" <?= (!empty($data['name_err']) ? 'border-red-500' : '') ?> class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="name" type="text" autofocus>
            <span class="text-red-500"><?= $data['name_err'] ?></span>
        </div>
        <div class="mb-4 relative">
            <span for="email">Email<sup>*</sup></span>
            <input value="<?= $data['email'] ?>" <?= (!empty($data['email_err']) ? 'border-red-500' : '') ?> class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="email" type="text" autofocus>
            <span class="text-red-500"><?= $data['email_err'] ?></span>
            
        </div>
        <div class="mb-4 relative">
            <span for="password">Password<sup>*</sup></span>
            <input value="<?= $data['password'] ?>" <?= (!empty($data['password_err']) ? 'border-red-500' : '') ?> class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="password" type="password" autofocus>
            <span class="text-red-500"><?= $data['password_err'] ?></span>
        </div>
        <div class="mb-4 relative">
            <span for="password">Confirm Password<sup>*</sup></span>
            <input value="<?= $data['confirm-password'] ?>" <?= (!empty($data['confirm-password_err']) ? 'border-red-500' : '') ?> class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="confirm-password" type="password" autofocus>
            <span class="text-red-500"><?= $data['confirm-password_err'] ?></span>
        </div>
        <button class="bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded" type="submit">Submit</button>
    </div>
</form>