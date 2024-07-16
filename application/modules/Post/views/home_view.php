<?php $this->load->view('header');  ?>

<?php //$this->load->view('sidebar');  
?>
<div class="content-container">
    <div class="sidebar">
        <h2>Our Users</h2>

        <?php foreach ($all_user as $user) { ?>
            <a class="user-link" href="<?php echo base_url('profile/'.$user['id']); ?>">
            <div class="user">  
                    <img src="<?php echo base_url('assets/images/profile_pictures/' . $user['profile_photo']) ?>" alt="Avatar" class="avatar">
                    <div class="user-data">
                        <h3><?php echo $user['name']; ?><h3>
                        <small><?php echo $user['username']; ?></small>
                        <p class="post-count">
                            <?php
                            $post_count = 0;
                            foreach ($posts as $post) {
                                if ($post['user_id'] == $user['id']) {
                                    $post_count++;
                                }
                            }
                            echo $post_count . ' posts';
                            ?>
                        </p>
                    </div>   
            </div>
            </a>
        <?php  } ?>
        <p>End of Users</p>
    </div>
    <div class="content">
        <?php foreach ($posts as $post) { ?>
            <div class="post">
                <?php foreach ($all_user as $user) { ?>
                    <?php if ($user['id'] == $post['user_id']) { ?>
                        <div class="post-user">
                            <img src="<?php echo base_url('assets/images/profile_pictures/' . $user['profile_photo']) ?>" alt="Avatar" class="avatar">
                            <div class="post-user-data">
                                <h3><?php echo $user['name']; ?><h3>
                                        <small><?php echo $user['username']; ?></small><br>
                            </div>
                        </div>
                    <?php } ?>
                <?php  } ?>
                <h3><?php echo $post['title']; ?></h3>
                <p><?php echo $post['content']; ?></p>
                <?php if ($post['image']) { ?>
                    <img src="<?php echo base_url('assets/images/posts/' . $post['image']); ?>" alt="Post Image" width="600" height="350px" />
                <?php } ?>
                <small><?php echo $post['created_at'] ?></small>
            </div>
        <?php } ?>
    </div>
</div>

<?php $this->load->view('footer');  ?>