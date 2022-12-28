





<form action="<?php echo URLROOT;?>/usersController/register" method="POST">
<div class="shadow-xl p-10 bg-white max-w-xl rounded">
    <h1 class="text-4xl font-black mb-4">signUp</h1>
    <div class="mb-4 relative">
        <input class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="name" type="text" autofocus>
        <label for="name" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">name</label>
    </div>
    <div class="mb-4 relative">
        <input class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="email" type="text" autofocus>
        <label for="email" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">email</label>
        <p class="alert alert-danger"></p>
    </div>
    <div class="mb-4 relative">
        <input class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="password" type="password" autofocus>
        <label for="password" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">password</label>
    </div>
    <div class="mb-4 relative">
        <input class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600" name="confirm-password" type="password" autofocus>
        <label for="password" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">Confirm Password</label>
    </div>
    <button class="bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded" type="submit">Submit</button>
</div>*
</form>