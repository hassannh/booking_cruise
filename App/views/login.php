<?php

require_once "include/navbar.php";

?>

<!-- component -->

<div class="logform flex justify-center" style="width: 100%;">
	<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
		<div class="relative py-3 sm:max-w-xl sm:mx-auto">
			<div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
			</div>
			<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
				<div class="max-w-md mx-auto">
					<div>
						<h1 class="text-2xl font-semibold">Login</h1>
					</div>
					<form class="divide-y divide-gray-200" action="<?php echo URLROOT;?>usersController/login" method="POST">
						<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
							<div class="relative">
								<input autocomplete="off" id="email" name="email" type="text" required class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
								<label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
								<?php if (isset($data['password_error'])): ?>
									<p class=""><?php echo $data['password_error']?></p>
								<?php endif; ?>
							</div>
							<div class="relative">
								<input autocomplete="off" id="password" name="password" type="password" required class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
								<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
								<?php if (isset($data['password_error'])): ?>
									<p class=""><?php echo $data['password_error']?></p>
								<?php endif; ?>
							</div>
							<div class="relative">
								<button name="submit" type="submit" class="bg-blue-500 text-white rounded-md px-2 py1">Submit</button>
								<br> <br>
								<a href="register">Register</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>