<?php $this->load->view('header') ?>


<?php if (isset($user)) : ?>
    <div class="content-container">
        <div class="sidebar">
            <div class="box">
                <img src="<?php echo base_url('assets/images/profile_pictures/' . $other_user['profile_photo']); ?>" alt="Admin" class="profile-img" width="150">
                <div class="details">
                    <h4> <?php echo ($other_user['name']); ?></h4>
                    <p class="text-secondary mb-1"><?php echo ($other_user['username']); ?></p>
                    <p class="text-secondary mb-1"><?php echo ($other_user['email']); ?></p>
                    <p class="text-secondary mb-1"><?php echo ($other_user['mob_no']); ?></p>
                    <p class="text-muted font-size-sm"><?php echo ($other_user['city']) . ', ' . $other_user['state']; ?></p>
                    <?php if ($user['id'] == $other_user['id']) { ?>
                        <div class="button">
                            <a class="btn btn-primary" href="<?php echo base_url('edit') ?>">Edit Profile</a>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
        <div class="content">
            <?php 
            if ($user['id'] == $other_user['id']) { 
                echo "<h2>Your Posts</h2>";
            } 
            else { 
                echo "<h2>".($other_user['name']) . "'s Posts</h2>";
             } 
             ?>
            <small><?php echo "Username : ".($user['username']); ?></small>
            <?php foreach ($user_posts as $user_post) { ?>
                <div class="post">
                    <h3><?php echo $user_post['title']; ?></h3>
                    <p><?php echo $user_post['content']; ?></p>
                    <?php if ($user_post['image']) { ?>
                        <img src="<?php echo base_url('assets/images/posts/' . $user_post['image']); ?>" alt="Post Image" width="600" height="350" />
                    <?php } ?>
                    <small><?php echo $user_post['created_at'] ?></small>
                    <?php if ($user['id'] == $other_user['id']) { ?>
                        <div class="post-button">
                            <a href="<?php echo base_url('edit_post/' . $user_post['id']) ?>" class="btn btn-primary">Edit Post</a>
                            <a href="<?php echo base_url('delete_post/' . $user_post['id']) ?>" class="btn btn-danger">Delete Post</a>
                        </div>
                    <?php  } ?>
                </div>
            <?php } ?>
        </div>
    </div>

<?php endif; ?>


<?php $this->load->view('footer') ?>