<div class="content-container">
    <div class="sidebar">
        <h2>Our Users</h2>

        <?php foreach ($all_user as $user) { ?>
            <div class="user">
                <img src="<?php echo base_url('assets/images/profile_pictures/' . $user['profile_photo']) ?>" alt="Avatar" class="avatar">
                <div class="user-data">
                    <h3><?php echo $user['name']; ?><h3>
                            <small><?php echo $user['username']; ?></small>
                </div>
            </div>
        <?php  } ?>
        <p>End of Users</p>
    </div>