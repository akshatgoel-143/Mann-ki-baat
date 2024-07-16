<?php $this->load->view('header') ?>

<main class="main">

    <?php if (isset($error)) {echo '<p class="alert alert-warning">' . $error . '</p>';} ?>

    <form action="<?php echo base_url('user/authenticate') ?>" method="post">
        <div class="form-group">
            <label for="username"><b>Username</b></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
        </div>
        <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Login</button><br>
        </div>
        <div class="form-group">
            <a href="<?php echo base_url('register') ?>">Don't have an account? Sign up</a>
        </div>
    </form>
</main>

<?php $this->load->view('footer') ?>