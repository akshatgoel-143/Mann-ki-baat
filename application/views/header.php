<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mann Ki Baat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')  ?>">


    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png') ?>">
</head>
<body>
<header>
    <div class="navbar">
    <a class="logo-link" href="<?php echo base_url('post') ?>">
        <div class="navbar-logo">
            <img src="<?php echo base_url('assets/images/logo.png')  ?>" height="70" width="80" alt="Logo">
            <span class="logo-name">Mann Ki Baat</span>
        </div>
        </a>
        <div class="navbar-item">
            <div class="navbar-buttons">
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <a href="<?php echo base_url('logout')  ?>">Logout</a>
                    <a href="<?php echo base_url('post') ?>">Home</a>
                    <a href="<?php echo base_url('create')  ?>">Create Post</a>
                    <a href="<?php echo base_url('profile/'.$user['id']); ?>">
                        <img src="<?php echo base_url('assets/images/profile_pictures/' . $user['profile_photo']); ?>" alt="Admin" class="profile-img-nav">
                        <?php echo ($user['name']); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php echo base_url('login')  ?>">Login</a>
                    <a href="<?php echo base_url('register') ?>">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

