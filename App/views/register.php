
    <div class="">
        <div class="">
            <div class="">
                <h2>Create Account</h2>
                <span class="">Please fill all the information to Create your Account</span>
                <form action="login" method="POST">
                    <!-- name input -->
                    <div class="">
                        <span for="name">Name<sup>*</sup></span>
                        <input type="text" name="userName" value="<?= $data['name'] ?>" class="<?= (!empty($data['name_err']) ? 'is-invalid' : '') ?>">
                        <span Class=""><?php echo $data['name_err'] ?></span>
                    </div>
                    <!-- email input -->
                    <div class="form-group">
                        <span for="email">Email<sup>*</sup></span>
                        <input type="email " name="userEmail" value="<?= $data['email'] ?>" class="<?= (!empty($data['email_err']) ? 'is-invalid' : '') ?>">
                        <span Class=""><?php echo $data['email_err'] ?></span>
                    </div>
                    <!-- password input -->
                    <div class="form-group">
                        <span for="password">Password<sup>*</sup></span>
                        <input type="password" name="userPassword" value="<?= $data['password'] ?>" class="<?= (!empty($data['password_err']) ? 'is-invalid' : '') ?>">
                        <span Class=""><?php echo $data['password_err'] ?></span>
                    </div>
                    <!-- password-confirm input -->
                    <div class="form-group">
                        <span for="confirm-password">Password confirm<sup>*</sup></span>
                        <input type="password" name="userConfirmPassword" value="<?= $data['userConfirmPassword'] ?>" class="<?= (!empty($data['confirm-password_err']) ? 'is-invalid' : '') ?>">
                        <span Class=""><?php echo $data['confirm-password_err'] ?></span>
                    </div>
                    <div>
                        <input type="submit" value="Register" class="btn btn-success">
                        <a href="<?= URLROOT ?>App/views/login" class="">Have you an account ? Log In </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

