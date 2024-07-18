<?php $this->load->view('header');  ?>

<div class="content-container">
<?php $this->load->view('sidebar');  ?>
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